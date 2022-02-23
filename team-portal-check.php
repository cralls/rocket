<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//error_reporting ( E_ALL );
//ini_set ( 'display_errors', 1 );
ini_set('memory_limit', '1G');
ini_set('max_execution_time', '1440');

use Magento\Framework\App\Bootstrap;

require __DIR__ . '/app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

$objectManager = $bootstrap->getObjectManager();
$state = $objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');

// Get team portal instances where date ends today
$_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$categoryFactory = $objectManager->create('Magento\Catalog\Model\ResourceModel\Category\CollectionFactory');
$categories = $categoryFactory->create()->addAttributeToSelect('*')->addAttributeToFilter('custom_attribute', array('like'=>'%'.date('Y-m-d').'%'));

if (count ( $categories ) == 0)
	die ( 'No Ending Team Portals Today!' );

foreach($categories as $category) {
    $subject = $category->getName();
    $endingDates = $category->getData('custom_attribute');
    $dateArr = explode ( ",", $endingDates );
    $subCatId = $category->getId();
    $endingCats [$subCatId] ['catName'] = $category->getName ();
    $endingCats [$subCatId] ['endDate'] = $dateArr [0];
    $endingCats [$subCatId] ['shipDate'] = $dateArr [1];
    $endingCats [$subCatId] ['startDate'] = $dateArr [2];

    $teamOrders = array ();
    $teamOrders [0] ['orderId'] = 'ORDER NUMBER';
    $teamOrders [0] ['purchase_date'] = 'PURCHASE DATE';
    $teamOrders [0] ['name'] = 'CUSTOMER';
    $teamOrders [0] ['description'] = 'DESCRIPTION';
    $teamOrders [0] ['part_number'] = 'PART NUMBER';
    $teamOrders [0] ['qty'] = 'QUANTITY';
    $teamOrders [0] ['price'] = 'PRICE';
    $teamOrders [0] ['email'] = 'EMAIL';
    
    $msg = '';
    
	$now = new \DateTime();
	$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
	$OrderFactory = $objectManager->create('Magento\Sales\Model\ResourceModel\Order\CollectionFactory');
	$orderCollection = $OrderFactory->create()->addFieldToSelect(array('*'));
	foreach ( $endingCats as $key => $endingCat ) {
	    $startDate = $endingCat['startDate'];
	}
	$orderCollection->addFieldToFilter('created_at', ['lteq' => $now->format('Y-m-d H:i:s')])->addFieldToFilter('created_at', ['gteq' => date("Y-m-d H:i:s", strtotime($startDate))]);
	$orderCollection->addFieldToFilter('status', array('neq' => array('Closed')));
	$orderCollection->addFieldToFilter('status', array('neq' => array('Canceled')));

	foreach($orderCollection as $order) {
	    $i = $order->getIncrementId();
		$items = $order->getAllVisibleItems ();
		$it = 0;
		foreach ( $items as $itemId => $item ) {
			$id = $item->getProductId ();
			$options = $item->getProductOptions ();
			$sku = $item->getSku ();
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$product = $objectManager->create('Magento\Catalog\Model\Product')->load($id);
			if (is_object ( $product )) {
				$productCategories = $product->getCategoryIds ();
				foreach ( $productCategories as $productCategory ) {
				    if($productCategory != $order->getTeamPortal() && strtotime($order->getCreatedAt()) > strtotime('2020-08-17 00:00:00')) continue;
					foreach ( $endingCats as $key => $endingCat ) {
					    if ($productCategory == $key) {
							if ($it > 0) {
								$teamOrders [$i . "-" . $it] ['orderId'] = '';
								$teamOrders [$i . "-" . $it] ['purchase_date'] = '';
								$teamOrders [$i . "-" . $it] ['name'] = '';
								$teamOrders [$i . "-" . $it] ['description'] = $item->getName ();
								$teamOrders [$i . "-" . $it] ['part_number'] = $sku;
								$teamOrders [$i . "-" . $it] ['qty'] = number_format ( $item->getData ( 'qty_ordered' ), 0 );
								$teamOrders [$i . "-" . $it] ['price'] = number_format ( $item->getPrice (), 2 );
								$teamOrders [$i . "-" . $it] ['email'] = $order->getCustomerEmail ();
								foreach ( $options ['attributes_info'] as $attribute ) {
									$it ++;
									$teamOrders [$i . "-" . $it] ['orderId'] = '';
									$teamOrders [$i . "-" . $it] ['purchase_date'] = '';
									$teamOrders [$i . "-" . $it] ['name'] = '';
									$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
								}
								foreach ( $options ['options'] as $attribute ) {
									$it ++;
									$teamOrders [$i . "-" . $it] ['orderId'] = '';
									$teamOrders [$i . "-" . $it] ['purchase_date'] = '';
									$teamOrders [$i . "-" . $it] ['name'] = '';
									$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
								}
							} else {
								$teamOrders [$i . "-" . $it] ['orderId'] = $order->getIncrementId();
								$teamOrders [$i . "-" . $it] ['purchase_date'] = $order->getCreatedAt ();
								$teamOrders [$i . "-" . $it] ['name'] = $order->getCustomerName ();
								$teamOrders [$i . "-" . $it] ['description'] = $item->getName ();
								$teamOrders [$i . "-" . $it] ['part_number'] = $sku;
								$teamOrders [$i . "-" . $it] ['qty'] = number_format ( $item->getData ( 'qty_ordered' ), 0 );
								$teamOrders [$i . "-" . $it] ['price'] = number_format ( $item->getPrice (), 2 );
								$teamOrders [$i . "-" . $it] ['email'] = $order->getCustomerEmail ();
								foreach ( $options ['attributes_info'] as $attribute ) {
									$it ++;
									$teamOrders [$i . "-" . $it] ['orderId'] = '';
									$teamOrders [$i . "-" . $it] ['purchase_date'] = '';
									$teamOrders [$i . "-" . $it] ['name'] = '';
									$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
								}
								if(isset($options['options'])) {
								    foreach ( $options ['options'] as $attribute ) {
    									$it ++;
    									$teamOrders [$i . "-" . $it] ['orderId'] = '';
    									$teamOrders [$i . "-" . $it] ['purchase_date'] = '';
    									$teamOrders [$i . "-" . $it] ['name'] = '';
    									$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
								    }
								}
							}
						}
					}
				}
			} else {
				$msg .= "Sku " . $sku . " doesn't exist on order " . $i . "<br>";
			}
			$it ++;
		}
		$i ++;
	}
	
    $file = fopen ( "teamOrders.csv", "w" );
    
    foreach ( $teamOrders as $line ) {
    	fputcsv ( $file, $line );
    }
    
    fclose ( $file );
    
    //$msg = '<a href="https://www.rocketsciencesports.com/teamOrders.php"><b>Click Here to Download Spreadsheet</b></a><br><br><br>';
    $msg = 'Click link to download spreadsheet -> https://www.rocketsciencesports.com/teamOrders.php';
    
    require 'lib/PHPMailer/src/Exception.php';
    require 'lib/PHPMailer/src/PHPMailer.php';
    require 'lib/PHPMailer/src/SMTP.php';
    
    if ($_REQUEST ['test'] == 1) {
        mail("cralls@vectorns.com", 'Team Portal Close Date for ' . $subject, $msg);
    } else {
        mail("team_portal@rocketsciencesports.com", 'Team Portal Close Date for ' . $subject, $msg);
        // PHPMailer is timing out on send
    	/*$mail = new PHPMailer ( true ); // Passing `true` enables exceptions
    	try {
    		// Server settings
    		$mail->SMTPDebug = 0; // Enable verbose debug output
    		$mail->isSMTP (); // Set mailer to use SMTP
    		$mail->Host = 'mail.rocketsciencesports.com'; // Specify main and backup SMTP servers
    		$mail->SMTPAuth = true; // Enable SMTP authentication
    		$mail->Username = 'no-reply@rocketsciencesports.com'; // SMTP username
    		$mail->Password = '7nS!3HwM{(xH'; // SMTP password
    		$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    		$mail->Port = 465; // TCP port to connect to
    		                   
    		// Recipients
    		$mail->setFrom ( 'no-reply@rocketsciencesports.com', 'Rocket Science Sports' );
    		$mail->addAddress ( 'team_portal@rocketsciencesports.com', 'Production' ); // Add a recipient
    		                                                                       
    		// Content
    		$mail->isHTML ( true ); // Set email format to HTML
    		$mail->Subject = 'Team Portal Close Date for ' . $subject;
    		$mail->Body = $msg;
    		
    		$mail->send ();
    		echo 'Message has been sent!<br><br>';
    	} catch ( Exception $e ) {
    		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    	}*/
    }
    
    echo '<a href="http://www.rocketsciencesports.com/teamOrders.php"><b>Click Here to Download Spreadsheet</b></a><br><br><br>';
}
?>
