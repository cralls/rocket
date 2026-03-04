<?php

use Magento\Framework\App\Bootstrap;
use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Framework\Translate\Inline\StateInterface;

require __DIR__ . '/public_html/app/bootstrap.php';

$params = $_SERVER;
$bootstrap = Bootstrap::create(BP, $params);
$objectManager = $bootstrap->getObjectManager();

/** @var \Magento\Framework\App\ResourceConnection $resource */
$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
$connection = $resource->getConnection();

/** @var TransportBuilder $transportBuilder */
$transportBuilder = $objectManager->get(TransportBuilder::class);

/** @var StateInterface $inlineTranslation */
$inlineTranslation = $objectManager->get(StateInterface::class);

$logFile = __DIR__ . '/clean_injections.log';

// Patterns to remove malicious injections
$patterns = [
    '/onerror\s*=\s*"[^"]*"/i',
    '/onerror\s*=\s*\'[^\']*\'/i',
    '/onerror\s*=\s*[^ >]+/i'
];

// Tables and columns to scan
$targets = [
    'cms_block'        => ['id' => 'block_id', 'field' => 'content'],
    'cms_page'         => ['id' => 'page_id',  'field' => 'content'],
    'core_config_data' => ['id' => 'config_id','field' => 'value']
];

file_put_contents($logFile, "---- Cleanup run: " . date('Y-m-d H:i:s') . " ----\n", FILE_APPEND);

$foundInjections = false;
$emailLines = [];
$emailLines[] = "Magento injection cleanup run on " . date('Y-m-d H:i:s');
$emailLines[] = "";

foreach ($targets as $table => $info) {
    $idField = $info['id'];
    $contentField = $info['field'];

    $select = $connection->select()
        ->from($table, [$idField, $contentField])
        ->where("$contentField LIKE '%onerror=%'");

    $rows = $connection->fetchAll($select);

    foreach ($rows as $row) {
        $id = $row[$idField];
        $content = $row[$contentField];
        $original = $content;

        foreach ($patterns as $pattern) {
            $content = preg_replace($pattern, '', $content);
        }

        if ($content !== $original) {
            $connection->update(
                $table,
                [$contentField => $content],
                [$idField . ' = ?' => $id]
            );

            $foundInjections = true;

            $logLine = "Cleaned injection in $table ID $id\n";
            file_put_contents($logFile, $logLine, FILE_APPEND);

            $snippet = mb_substr($original, 0, 200);

            $emailLines[] = "Table: $table, ID: $id";
            $emailLines[] = "Original snippet:";
            $emailLines[] = $snippet;
            $emailLines[] = str_repeat('-', 60);
        }
    }
}

file_put_contents($logFile, "Cleanup complete.\n\n", FILE_APPEND);

// Only send Magento email if injections were found
if ($foundInjections) {

    $inlineTranslation->suspend();

    $body = implode("\n", $emailLines);

    $transport = $transportBuilder
        ->setTemplateIdentifier('clean_injections_email_template') // dummy ID, we send raw body
        ->setTemplateOptions([
            'area'  => \Magento\Framework\App\Area::AREA_ADMINHTML,
            'store' => 0
        ])
        ->setTemplateVars(['body' => $body])
        ->setFrom([
            'name'  => 'Magento Cleanup Script',
            'email' => 'webmaster@vectorns.com'
        ])
        ->addTo('webmaster@vectorns.com')
        ->setReplyTo('webmaster@vectorns.com')
        ->setBodyText($body)
        ->getTransport();

    $transport->sendMessage();

    $inlineTranslation->resume();
}

echo "Injection cleanup complete.\n";

