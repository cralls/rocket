<?php
error_reporting ( E_ALL );
ini_set ( 'display_errors', 1 );

require_once ('app/Mage.php');
Mage::app ()->setCurrentStore ( Mage_Core_Model_App::ADMIN_STORE_ID );
Mage::app ( "default" );

// Check all team portal categories expiration dates to see if today is the expiration date
$team_portals = Mage::getModel ( 'catalog/category' )->load ( 108 );
$subcats = $team_portals->getChildren ();
$endingCats = array ();
foreach ( explode ( ",", $subcats ) as $subCatId ) {
	$subcat = Mage::getModel ( 'catalog/category' )->load ( $subCatId );
	$dates = $subcat->getCustomAttribute ();
	$dateArr = explode ( ",", $dates );
	if ($dateArr [0] == date ( 'Y-m-d' )) {
		$subject .= " - " . $subcat->getName ();
		$endingCats [$subCatId] ['catName'] = $subcat->getName ();
		$endingCats [$subCatId] ['endDate'] = $dateArr [0];
		$endingCats [$subCatId] ['shipDate'] = $dateArr [1];
		$endingCats [$subCatId] ['startDate'] = $dateArr [2];
	}
}

if (count ( $endingCats ) == 0)
	die ( 'No Ending Team Portals Today!' );

// DEFINE SITES
if (! empty ( $_REQUEST ['id'] )) {
	$sites = array (
			'100000' . $_REQUEST ['id'] 
	);
} else {
	$sites = array (
			'100074000',
			'200000000' 
	);
}
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
foreach ( $sites as $key => $site ) {
	$h = $key;
	$stores = array (
			'1',
			'2' 
	);
	$condition = $stores [$h] . '%';
	$wsg = Mage::getModel ( 'sales/order' )->getCollection ()->setOrder ( 'increment_id', 'DESC' )->addAttributeToFilter ( 'increment_id', array (
			'like' => $condition 
	) )->setPageSize ( 1 )->setCurPage ( 1 );
	$wsgid = $wsg->getFirstItem ()->getIncrementId ();
	
	$i = $sites [$h];
	while ( $i <= $wsgid ) {
		// $order = Mage::getModel('sales/order')->loadByIncrementId($this->getOrderId());
		$order = Mage::getModel ( 'sales/order' )->loadByIncrementId ( $i );
		if ($order->getStatusLabel () == 'Closed' || $order->getStatusLabel () == 'Canceled' || $order->getStatusLabel () == '') {
			$i ++;
			continue;
		}
		
		$items = $order->getAllItems ();
		$it = 0;
		$s = 0;
		foreach ( $items as $itemId => $item ) {
			$id = $item->getProductId ();
			$options = $item->getProductOptions ();
			$sku = $item->getSku ();
			$product = Mage::getModel ( 'catalog/product' )->load ( $id );
			if (is_object ( $product )) {
				$productCategories = $product->getCategoryIds ();
				foreach ( $productCategories as $productCategory ) {
					foreach ( $endingCats as $key => $endingCat ) {
						// If start date is specified then check order date is after it
						if (strtotime ( $endingCat ['startDate'] ) <= strtotime ( date ( 'Y-m-d', strtotime ( $order->getCreatedAt () ) ) )) {
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
										$teamOrders [$i . "-" . $it] ['name'] = '';
										$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
									}
									foreach ( $options ['options'] as $attribute ) {
										$it ++;
										$teamOrders [$i . "-" . $it] ['orderId'] = '';
										$teamOrders [$i . "-" . $it] ['name'] = '';
										$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
									}
								} else {
									$teamOrders [$i . "-" . $it] ['orderId'] = $i;
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
										$teamOrders [$i . "-" . $it] ['name'] = '';
										$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
									}
									foreach ( $options ['options'] as $attribute ) {
										$it ++;
										$teamOrders [$i . "-" . $it] ['orderId'] = '';
										$teamOrders [$i . "-" . $it] ['name'] = '';
										$teamOrders [$i . "-" . $it] ['description'] = $attribute ['label'] . ": " . $attribute ['value'];
									}
								}
								// $teamOrders[$i]['category'] = $endingCat;
								/*
								 * $teamOrders[$i]['items'][$sku."-".$it]['sku'] = $sku;
								 * $teamOrders[$i]['items'][$sku."-".$it]['name'] = $item->getName();
								 * $teamOrders[$i]['items'][$sku."-".$it]['size'] = $product->getAttributeText('size');
								 * $teamOrders[$i]['items'][$sku."-".$it]['qty'] = $item->getData('qty_ordered');
								 * $teamOrders[$i]['items'][$sku."-".$it]['options'] = $options;
								 */
							}
						} else {
							break 3;
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
}

$file = fopen ( "teamOrders.csv", "w" );

foreach ( $teamOrders as $line ) {
	fputcsv ( $file, $line );
}

fclose ( $file );

$msg = '<a href="http://www.rocketsciencesports.com/teamOrders.php"><b>Click Here to Download Spreadsheet</b></a><br><br><br>';

// Generate E-mail
/*
 * $orderId = 0;
 * foreach($teamOrders as $key => $teamOrder) {
 * if($orderId != $key || $orderId == 0) {
 * $msg .= '-----------------------SUMMARY ORDER #'.$teamOrder["orderId"].'-----------------------<br>';
 * $msg .= 'Closing Date: '.$teamOrder['category']['endDate'].'<br>';
 * $msg .= 'Factory Ship Date: '.$teamOrder['category']['shipDate'].'<br>';
 * $msg .= 'Customer Name: '.$teamOrder['customer'].'<br>';
 * $msg .= 'Team Name: '.$teamOrder['category']['catName'].'<br><br>';
 * }
 * $i = 1;
 * foreach($teamOrder['items'] as $key => $item) {
 * $msg .= '<b>Item #'.$i.'</b>:<br>';
 * $msg .= 'Part Number: '.$item['sku'].'<br>';
 * $msg .= 'Name: '.$item['name'].'<br>';
 * $msg .= 'Quantity: '.$item['qty'].'<br>';
 * foreach($item['options']['attributes_info'] as $attribute) {
 * $msg .= $attribute['label'].": ".$attribute['value']."<br>";
 * }
 * foreach($item['options']['options'] as $attribute) {
 * $msg .= $attribute['label'].": ".$attribute['value']."<br>";
 * }
 * $msg .= "<br>";
 * $i++;
 * }
 * $orderId = $key;
 * }
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

if ($_REQUEST ['test'] == 1) {
	$mail = new PHPMailer ( true ); // Passing `true` enables exceptions
	try {
		// Server settings
		$mail->SMTPDebug = 0; // Enable verbose debug output
		$mail->isSMTP (); // Set mailer to use SMTP
		$mail->Host = 'mail.rocketsciencesports.com'; // Specify main and backup SMTP servers
		$mail->SMTPAuth = true; // Enable SMTP authentication
		$mail->Username = 'no-reply@rocketsciencesports.com'; // SMTP username
		$mail->Password = '8aQ8ZnXv4qC'; // SMTP password
		$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587; // TCP port to connect to
		                   
		// Recipients
		$mail->setFrom ( 'no-reply@rocketsciencesports.com', 'Rocket Science Sports' );
		$mail->addAddress ( 'cralls@vectorns.com', 'cralls' ); // Add a recipient
		                                                    
		// Content
		$mail->isHTML ( true ); // Set email format to HTML
		$mail->Subject = 'Team Portal Close Date for ' . $subject;
		$mail->Body = $msg;
		
		$mail->send ();
		echo 'Message has been sent!<br><br>';
	} catch ( Exception $e ) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
} else {
	$mail = new PHPMailer ( true ); // Passing `true` enables exceptions
	try {
		// Server settings
		$mail->SMTPDebug = 0; // Enable verbose debug output
		$mail->isSMTP (); // Set mailer to use SMTP
		$mail->Host = 'mail.rocketsciencesports.com'; // Specify main and backup SMTP servers
		$mail->SMTPAuth = true; // Enable SMTP authentication
		$mail->Username = 'no-reply@rocketsciencesports.com'; // SMTP username
		$mail->Password = '8aQ8ZnXv4qC'; // SMTP password
		$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587; // TCP port to connect to
		                   
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
	}
}

echo '<a href="http://www.rocketsciencesports.com/teamOrders.php"><b>Click Here to Download Spreadsheet</b></a><br><br><br>';
?>
