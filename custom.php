<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use Magento\Framework\App\Bootstrap;

require __DIR__ . '/../app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

$objectManager = $bootstrap->getObjectManager();
$state = $objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');

ini_set('session.save_path', '/home/rocketsc/public_html/var/session');
//session_save_path('/home/rocketsc/public_html/var/session/');
session_start();
if(isset($_GET['s']) && $_GET['s'] == 'sport' && ($_GET['sp'] == "triathlon" || $_GET['sp'] == "cycling" || $_GET['sp'] == "swimming")) {
	$_SESSION['custom']['sport'] = $_GET['sp'];
	if($_GET['sp'] == 'triathlon') {
		header("location: /custom-select-level");
	} elseif($_GET['sp'] == 'cycling') {
		header("location: /custom-select-level-cycling");
	} elseif($_GET['sp'] == 'swimming') {
		header("location: /custom-select-level-swimming");
	}
} elseif(isset($_GET['s']) && $_GET['s'] == 'level' || (isset($_GET['s']) && $_GET['s'] == 'sport' && ($_GET['sp'] != "triathlon" && $_GET['sp'] != "cycling" && $_GET['sp'] != "swimming"))) {
	$_SESSION['custom']['level'] = $_GET['l'];
	if(isset($_GET['sp']) && !empty($_GET['sp'])) $_SESSION['custom']['sport'] = $_GET['sp'];
	$sport = $_SESSION['custom']['sport'];
	$level = $_SESSION['custom']['level'];
	if($sport == 'triathlon') {
		if($level == 'rocket') {
			header("location: /custom-rocket-products");
		} elseif($level == 'elite') {
			header("location: /custom-elite-products");
		} elseif($level == 'rj') {
			header("location: /custom-rj-products");
		}
	} elseif($sport == 'swimming') {
		if($level == 'orbit2') {
			header("location: /custom-orbit-products");
		} elseif($level == 'flight') {
			header("location: /custom-flight-products");
		}
	} elseif($sport == 'cycling') {
		if($level == 'aero') {
			header("location: /custom-rocket-cycling-products");
		} elseif($level == 'elite3') {
			header("location: /custom-elite-cycling-products");
		} elseif($level == 'rj') {
			header("location: /custom-rj-cycling-products");
		}
	} elseif($sport == 'swim-cap') {
                header("location: /custom-swim-cap-products");
        } elseif($sport == 'running') {
                header("location: /custom-running-yoga-products");
        } elseif($sport == 'gym') {
                header("location: /custom-gym-products");
        } elseif($sport == 'yoga') {
                header("location: /custom-yoga-products");
        } elseif($sport == 'basketball') {
                header("location: /custom-basketball-products");
        } elseif($sport == 'soccer') {
                header("location: /custom-soccer-products");
        } elseif($sport == 'volleyball') {
                header("location: /custom-volleyball-products");
        } elseif($sport == 'tennis') {
                header("location: /custom-tennis-products");
        } elseif($sport == 'rugby') {
                header("location: /custom-rugby-products");
        } elseif($sport == 'rowing') {
                header("location: /custom-rowing-products");
        } elseif($sport == 'pe-uniform') {
                header("location: /custom-pe-uniform-products");
        } elseif($sport == 'water-polo') {
                header("location: /custom-water-polo-products");
        } elseif($sport == 'underwater-hockey') {
                header("location: /custom-underwater-hockey-products");
        }
} elseif(isset($_GET['s']) && $_GET['s'] == 'product') {
	$_SESSION['custom']['products'] = $_POST['products'];
	if(isset($_GET['products']) && $_GET['products'] != '') $_SESSION['custom']['products'] = $_GET['products'];
	header("location: /custom-taste");
} elseif(isset($_GET['s']) && $_GET['s'] == 'taste') {
	$_SESSION['custom']['taste'] = $_GET['t'];
	header("location: /custom-select-your-colors");
} elseif(isset($_GET['s']) && $_GET['s'] == 'colors') {
	$_SESSION['custom']['customColor'] = 0;
	if($_POST['pantones'] == 'Main Pantone Color Code' && $_POST['additionalPantones'] == 'Additional Pantone Color Codes' || ($_POST['additionalPantones'] == '' || $_POST['pantones'] == '')) {
		$_SESSION['custom']['mainColor'] = $_POST['color'];
		$_SESSION['custom']['additionalColors'] = $_POST['additional'];
	} else {
		$_SESSION['custom']['customColor'] = 1;
		$_SESSION['custom']['mainColor'] = $_POST['pantones'];
        $_SESSION['custom']['additionalColors'] = $_POST['additionalPantones'];
	}
	header("location: /custom-file-upload");
} elseif(isset($_GET['s']) && $_GET['s'] == 'file-upload') {
	$now = strtotime('now');
	if($_FILES['file']['tmp_name'] != '') move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$now.$_FILES['file']['name']);
	if($_FILES['file2']['tmp_name'] != '') move_uploaded_file($_FILES['file2']['tmp_name'], 'uploads/'.$now.$_FILES['file2']['name']);
	if($_FILES['file3']['tmp_name'] != '') move_uploaded_file($_FILES['file3']['tmp_name'], 'uploads/'.$now.$_FILES['file3']['name']);
	if($_FILES['file4']['tmp_name'] != '') move_uploaded_file($_FILES['file4']['tmp_name'], 'uploads/'.$now.$_FILES['file4']['name']);
	if($_FILES['file5']['tmp_name'] != '') move_uploaded_file($_FILES['file5']['tmp_name'], 'uploads/'.$now.$_FILES['file5']['name']);
	if($_FILES['file']['tmp_name'] != '') $_SESSION['custom']['filename'] = $now.$_FILES['file']['name'];
	if($_FILES['file2']['tmp_name'] != '') $_SESSION['custom']['filename2'] = $now.$_FILES['file2']['name'];
	if($_FILES['file3']['tmp_name'] != '') $_SESSION['custom']['filename3'] = $now.$_FILES['file3']['name'];
	if($_FILES['file4']['tmp_name'] != '') $_SESSION['custom']['filename4'] = $now.$_FILES['file4']['name'];
	if($_FILES['file5']['tmp_name'] != '') $_SESSION['custom']['filename5'] = $now.$_FILES['file5']['name'];
	header("location: /custom-team-size");
} elseif(isset($_GET['s']) && $_GET['s'] == 'team-size') {
	$_SESSION['custom']['team-size'] = $_POST['team-size'][0];
	$_SESSION['custom']['delivery'] = $_POST['delivery'];
	header("location: /custom-design-instructions");
} elseif(isset($_GET['s']) && $_GET['s'] == 'design-instructions') {
	$_SESSION['custom']['design-project'] = $_POST['design-project'];
	$_SESSION['custom']['full-name'] = $_POST['full-name'];
	$_SESSION['custom']['email'] = $_POST['email'];
	$_SESSION['custom']['phone'] = $_POST['phone'];
	$_SESSION['custom']['street'] = $_POST['street'];
	$_SESSION['custom']['city'] = $_POST['city'];
	$_SESSION['custom']['zip'] = $_POST['zip'];
	$_SESSION['custom']['country'] = $_POST['country'];
	$_SESSION['custom']['design-instructions'] = $_POST['design-instructions'];
	header("location: /custom-recap?t=".date('ymdhis'));
} elseif(isset($_GET['s']) && $_GET['s'] == 'msg_id') {
    $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
    $connection = $resource->getConnection();
    $tableName = $resource->getTableName('custom_msg'); //gives table name with prefix
    
    //Select Data from table
	$query = "SELECT * from $tableName where msg_id = '".$_GET['msg_id']."'";
	
	$msgId = $connection->fetchAll($query); // gives associated array, table fields as key in array.
	
	$msg = $msgId[0]['msg'];
	
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		// Generate & Send HTML E-mail
		$subject = "New Custom Submission for ".$msgId[0]['name'];

		//Server settings
		$mail->SMTPDebug = 0;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'sales@rocketsciencesports.com';                 // SMTP username
		$mail->Password = 'R0ck3tSc13nc3!';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		//Recipients
		$mail->setFrom('sales@rocketsciencesports.com');
		$mail->addReplyTo('cs@rocketsciencesports.com');
		$mail->addAddress($msgId[0]['email']);     // Add a recipient
		//$mail->addBCC('design@rocketsciencesports.com');
		$mail->addBCC('cs@rocketsciencesports.com');
		
		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $msg;
		
		$mail->send();
	} catch (Exception $e) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
	
} elseif(isset($_GET['msg_id']) && $_GET['s'] != 'msg_Id') {
	$_SESSION['custom']['msg_id'] = $_GET['msg_id'];
	setcookie("msg_id", $_GET['msg_id']);
	header("Location: https://www.rocketsciencesports.com/custom/triathlon/custom-design-deposit.html");
} elseif(isset($_GET['s']) && $_GET['s'] == 'recap') {
	// Generate & Send HTML E-mail
	$subject = "New Custom Submission for ".$_SESSION['custom']['full-name'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'Reply-To: '.$_SESSION['custom']['email'] . "\r\n";
	$headers .= 'From: custom@rocketsciencesports.com\r\n';
	//$to = "custom@rocketsciencesports.com, design@rocketsciencesports.com";
	$to = "marcin@rocketsciencesports.com";
	if($_SERVER['REMOTE_ADDR'] == '174.126.8.102') $to = 'cralls@vectorns.com';
	$additionalImages = explode(",", $_SESSION['custom']['additionalColors']);
	$images = '';
        foreach($additionalImages as $image) {
        	$images .= "<img src='".$image."' style='display: inline-block;'> ";
        }
	$msg = "<div style='text-align: center;'>";

	$customRandId = mt_rand(10000, 99999);
$msg = '

<div class="main-menu" style="max-width: 700px;margin:0 auto 20px; font-family: sans-serif;position: relative; top: 0px;background: linear-gradient(to bottom, #282d33 0%, #151a20 100%);">
		<style type="text/css">
{{css file="css/email-inline_1.css"}}
table { width: 100%; }
</style>
<div style="background-color: white; max-width: 700px; margin: 0 auto; font-family: sans-serif;">
<div class="main-menu"
	style="text-align: center; vertical-align: top; max-width: 700px; margin: 0 auto 20px; font-family: sans-serif; position: relative; top: 0px; background-color: #555;">
	<div style="background-color: black;">
	<a href="http://www.rocketsciencesports.com/"><img
		src="http://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/black-white-logo.jpg"
		style="max-width: 100%;"></a>
	</div>
	<div class="container">
		<div id="header-nav" class="skip-content nav-content"
			style="display: block; padding: 0;">


			<div class="nav-container"
				style="position: relative; z-index: 4; width: 100%; background: none;">
				<div class="nav"
					style="margin: 0 auto; padding-left: 0; list-style: none;">


					<ul id="nav" class="grid-full"
						style="position: relative; z-index: 9; width: 100%; padding: 0; list-style-type: none; margin-top: 0;">


						<li class="level nav-1 first parent  no-level-thumbnail"
							style="border-right: none; display: inline-block;"><a
							href="http://www.rocketsciencesports.com/shop.html" class=""
							style="font-size: 16px; display: block; text-decoration: none; position: relative; font-weight: 700; text-transform: uppercase; padding: 0; color: #ccc;">
								<div class="thumbnail"></div> <span
								style="background: none; display: block; padding: 15px 20px; cursor: pointer; white-space: normal; position: relative; z-index: 2; line-height: 30px; text-shadow: 1px 1px 1px #212121;">Shop</span><span
								class="spanchildren"></span>
						</a></li>
						<li class="level nav-2 parent  no-level-thumbnail "
							style="border-right: none; display: inline-block;"><a
							href="http://www.rocketsciencesports.com/custom.html"
							style="font-size: 16px; display: block; text-decoration: none; position: relative; font-weight: 700; text-transform: uppercase; padding: 0; color: #ccc;">
								<div class="thumbnail"></div> <span
								style="background: none; display: block; padding: 15px 20px; cursor: pointer; white-space: normal; position: relative; z-index: 2; line-height: 30px; text-shadow: 1px 1px 1px #212121;">Custom</span><span
								class="spanchildren"></span>
						</a></li>
						<li class="level nav-3  no-level-thumbnail "
							style="border-right: none; display: inline-block;"><a
							href="http://www.rocketsciencesports.com/team-of-one.html"
							style="font-size: 16px; display: block; text-decoration: none; position: relative; font-weight: 700; text-transform: uppercase; padding: 0; color: #ccc;">
								<div class="thumbnail"></div> <span
								style="background: none; display: block; padding: 15px 20px; cursor: pointer; white-space: normal; position: relative; z-index: 2; line-height: 30px; text-shadow: 1px 1px 1px #212121;">Team
									of One</span>
						</a></li>
						<li class="level nav-4  no-level-thumbnail "
							style="border-right: none; display: inline-block;"><a
							href="http://www.rocketsciencesports.com/team-portal.html"
							style="font-size: 16px; display: block; text-decoration: none; position: relative; font-weight: 700; text-transform: uppercase; padding: 0; color: #ccc;">
								<div class="thumbnail"></div> <span
								style="background: none; display: block; padding: 15px 20px; cursor: pointer; white-space: normal; position: relative; z-index: 2; line-height: 30px; text-shadow: 1px 1px 1px #212121;">Team
									Portal</span>
						</a></li>
						<li class="level nav-5 last parent  no-level-thumbnail "
							style="border-right: none; display: inline-block;"><a
							href="http://www.rocketsciencesports.com/events.html"
							style="font-size: 16px; display: block; text-decoration: none; position: relative; font-weight: 700; text-transform: uppercase; padding: 0; color: #ccc;">
								<div class="thumbnail"></div> <span
								style="background: none; display: block; padding: 15px 20px; cursor: pointer; white-space: normal; position: relative; z-index: 2; line-height: 30px; text-shadow: 1px 1px 1px #212121;">Events</span><span
								class="spanchildren"></span>
						</a></li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
		<div style="clear: both;"></div>
		<div style="text-align: left; max-width: 615px; margin: 0 auto;">
		<p style="font-size: 18px; font-weight: bold;">Hi '.$_SESSION['custom']['full-name'].',</p>

		<p>THANK YOU FOR YOUR <b>CUSTOM ORDER ENQUIRY</b> FROM ROCKET SCIENCE SPORTS!<br>
		<b>Your reference # is CUSTOM-'.$customRandId.'</b> - Placed on '.date('F d, Y H:i:s A e').'</p>
		<p>One of our sales associates will be in touch with you shortly.<br>
		Your order request summary is below. Thank you again for your business.</p>
		<p>Enquiry Questions?<br>
		<b>Call Us</b>: Tel. +1.512.782.4448/+86.021.6236.0447<br>
		<b>Email</b>: custom@rocketsciencesports.com</p><br><br></div>

	';
$msg .= "		<table border='1' align='center' style='max-width: 615px;'><tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Team Size</td><td style='padding: 10px;'>".$_SESSION['custom']['team-size']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Delivery Date</td><td style='padding: 10px;'>".$_SESSION['custom']['delivery']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Project Name</td><td style='padding: 10px;'>".$_SESSION['custom']['design-project']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Design Instructions</td><td style='padding: 10px;'>".$_SESSION['custom']['design-instructions']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Sport</td><td style='padding: 10px;'>".$_SESSION['custom']['sport']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Level</td><td style='padding: 10px;'>".$_SESSION['custom']['level']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Products</td><td style='padding: 10px;'>".$_SESSION['custom']['products']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Taste</td><td style='padding: 10px;'>".$_SESSION['custom']['taste']."</td></tr>";

	if($_SESSION['custom']['customColor']) {
		$msg .= "<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Main Color</td><td style='padding: 10px;'>".$_SESSION['custom']['mainColor']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Additional Colors</td><td style='padding: 10px;'>".$_SESSION['custom']['additionalColors']."</td></tr>";
	} else {
		$msg .= "	<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Main Color</td><td style='padding: 10px;'><img src='".$_SESSION['custom']['mainColor']."'></td></tr>
			<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Additional Colors</td><td style='padding: 10px;'>".$images."</td></tr>";
	}

$msg .=	"	<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Uploaded Files</td><td style='padding: 10px;'>";
					if(isset($_SESSION['custom']['filename'])) $msg .= "<a href='http://www.rocketsciencesports.com/uploads/".$_SESSION['custom']['filename']."'>".$_SESSION['custom']['filename']."</a><br>";
					if(isset($_SESSION['custom']['filename2'])) $msg .= "<a href='http://www.rocketsciencesports.com/uploads/".$_SESSION['custom']['filename2']."'>".$_SESSION['custom']['filename2']."</a><br>";
					if(isset($_SESSION['custom']['filename3'])) $msg .= "<a href='http://www.rocketsciencesports.com/uploads/".$_SESSION['custom']['filename3']."'>".$_SESSION['custom']['filename3']."</a><br>";
					if(isset($_SESSION['custom']['filename4'])) $msg .= "<a href='http://www.rocketsciencesports.com/uploads/".$_SESSION['custom']['filename4']."'>".$_SESSION['custom']['filename4']."</a><br>";
					if(isset($_SESSION['custom']['filename5'])) $msg .= "<a href='http://www.rocketsciencesports.com/uploads/".$_SESSION['custom']['filename5']."'>".$_SESSION['custom']['filename5']."</a><br>";
$msg .= "        	</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Full Name: </td><td style='padding: 10px;'>".$_SESSION['custom']['full-name']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>E-mail Address: </td><td style='padding: 10px;'>".$_SESSION['custom']['email']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Phone Number: </td><td style='padding: 10px;'>".$_SESSION['custom']['phone']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Street: </td><td style='padding: 10px;'>".$_SESSION['custom']['street']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>City: </td><td style='padding: 10px;'>".$_SESSION['custom']['city']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Zip: </td><td style='padding: 10px;'>".$_SESSION['custom']['zip']."</td></tr>
		<tr><td style='padding: 10px; text-align: right; font-weight: bold;'>Country: </td><td style='padding: 10px;'>".$_SESSION['custom']['country']."</td></tr>
		</table>
</div>

		";

$msg .= '<div style="text-align: center; background-color: white;">
	<a href="https://www.rocketsciencesports.com/"><img style="display: inline-block;" src="http://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/web.png"></a>
	<a href="https://www.instagram.com/rocketsciencesports/?hl=en"><img style="display: inline-block;" src="http://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/instagram.png"></a>
	<a href="https://www.pinterest.com/rocketsciences"><img style="display: inline-block;" src="http://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/pinterest.png"></a>
	<a href="https://www.facebook.com/rocketsciencesports/"><img style="display: inline-block;" src="http://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/facebook.png"></a>
	<a href="https://www.youtube.com/c/RocketScienceSports"><img style="display: inline-block;" src="http://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/youtube.png"></a>
</div>
<a href="http://www.rocketsciencesports.com/custom.html"><img
	style="max-width: 100%;"
	src="http://www.rocketsciencesports.com/skin/frontend/tm_themes/theme746/images/custom-your-logo.png"></a>

';
	/*mail($to, $subject, $msg, $headers);
	if($_SERVER['REMOTE_ADDR'] == '159.118.145.85') die($msg);
	$customer = $_SESSION['custom']['email'];
	mail($customer, $subject, $msg, $headers);*/

    $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
    $connection = $resource->getConnection();
    $tableName = $resource->getTableName('custom_msg'); //gives table name with prefix
    $query = "INSERT INTO $tableName (`msg_id`,`msg`, `custom_rand_id`, `email`, `name`) VALUES (NULL, '".addslashes($msg)."', '".$customRandId."', '".$_SESSION['custom']['email']."', '".$_SESSION['custom']['full-name']."')";
	$result = $connection->query($query);
	
	$query = "SELECT * from $tableName where custom_rand_id = '".$customRandId."'";
	$msgId = $connection->fetchAll($query);
	
	$msg2 = "<p>Hi ".$_SESSION['custom']['full-name'].",</p>
	
	<p>First of all, thank you for your ".$_SESSION['custom']['sport']." design request. In order to start your free design, we require a $200 advance deposit. This deposit is 100% refundable upon placement of your first order.</p>
	
	<p>We also offer a \"design satisfaction\" guarantee - that means unlimited revisions until you're completely satisfied with your design.</p>
			
	<p>Please confirm that you would like to proceed with your design! Once you are ready, click this link: <a href='https://www.rocketsciencesports.com/custom.php?msg_id=".$msgId[0]['msg_id']."'>PAY MY DESIGN DEPOSIT</a>. After the payment is made, we can start on your design, which should take 36 to 48 hours (excluding weekends and holidays).</p>
			
	<p>Additionally, we also do <a href='https://www.rocketsciencesports.com/team-portal.html'>team orders</a> (minimum order in each style 12pcs) or the <a href='https://www.rocketsciencesports.com/team-of-one.html'>Team of One</a> program, if you don't see the gear you would like to order on the Team of One simply contact us, where 5+pcs orders can be tailored to your personal style.</p>

	<p>Looking forward to hearing from you! If you have any further questions, please do not hesitate to contact me.</p>

	<p>- Customer Service Team</p>";
	
	if($_SESSION['custom']['sport'] == 'swim-cap') {
		$msg2 = "<p>Hi ".$_SESSION['custom']['full-name'].",</p>

				<p>First of all, thank you for your swim caps design request!</p> 
				
				<p>We have various different kinds of swim caps for your specific needs - <a href='https://www.rocketsciencesports.com/custom/swim-caps/custom-cap-100-latex.html'>latex</a>, <a href='https://www.rocketsciencesports.com/custom/swim-caps/custom-lightweight-cap-100-silicone.html'>lightweight silicone</a>, <a href='https://www.rocketsciencesports.com/custom/swim-caps/custom-classic-cap-100-silicone.html'>classic silicone</a>, <a href='https://www.rocketsciencesports.com/custom/swim-caps/custom-longhair-cap-100-silicone.html'>long hair</a> and <a href='https://www.rocketsciencesports.com/custom/swim-caps.html'>many more</a>. Beyond that, you can select custom colors, up to four screens, and even add names for an extra $3/per cap.</p>
				
				<p>As a reminder, I would like to inform you that our MOQ for custom silicon swim caps is 50pcs, and latex caps is 100pcs.</p>
				
				<p>If you're in a rush - no worries - we pride ourselves on our lead times for swim caps at Rocket Science Sports - with the entire process taking approximately 3 weeks!</p>
				
				<p>Looking forward to hearing from you! If you have any further questions, please do not hesitate to contact me.</p>
				
				<p>Thanks</p>";
	}
	
	$msg2 .= '<table style="font-family: Arial; font-size: 16px; font-weight: bold; width: 500px; max-width: 500px; min-width: 500px; border-collapse: collapse;">
				<tr>
					<td style="padding: 0; width: 150px;"><img src="http://www.rocketsciencesports.com/sig/images/logo5.png" style="vertical-align: bottom;"></td>
					<td style="padding: 0; font-size: 12px; color: #3282c4; vertical-align: bottom;">
						<span style="font-size: 24px; color: #222740;">Customer Service</span><br>
						<label for="phone" style="color: #222740;">Phone:</label> <span id="phone">+1 512 782 4448 (USA)</span><br>
						<label for="phone" style="color: #222740;">Phone:</label> <span id="phone">+86 139 1746 6728 (China)</span><br>
						<label for="skype" style="color: #222740;">Skype:</label> <span id="skype">marcintri69</span><br>
						<label for="website" style="color: #222740;">Website:</label> <span id="website">rocketsciencesports.com</span><br>
					</td>
					<td style="padding: 0; width: 32px; vertical-align: bottom; ">
						<a href="http://www.facebook.com/rocketsciencesports"><img src="http://www.rocketsciencesports.com/sig/images/facebook.png"></a>
						<a href="https://twitter.com/rocketmanmarcin"><img src="http://www.rocketsciencesports.com/sig/images/twitter.png"></a>
						<a href="http://www.pinterest.com/rocketsciences/"><img src="http://www.rocketsciencesports.com/sig/images/pinterest.png"></a>
						<a href="https://www.instagram.com/rocketsciencesports/"><img src="http://www.rocketsciencesports.com/sig/images/photobucket.png"></a>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="padding: 0;"><img src="http://www.rocketsciencesports.com/sig/images/bottom5.png" style="width: 500px; max-width: 500px; min-width: 500px;"></td>
				</tr>
				</table>';
	
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
    		//Server settings
	    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'sales@rocketsciencesports.com';                 // SMTP username
	    //$mail->Password = 'T$67CsNWu;GP';                           // SMTP password
	    $mail->Password = 'R0ck3tSc13nc3!';
	    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	    //$mail->Port = 465;                                    // TCP port to connect to
	    $mail->Port = 465;
	    
	    /*$mail->IsSMTP(); // enable SMTP
	    $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
	    $mail->SMTPAuth = true;  // authentication enabled
	    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	    $mail->Host = 'smtp.gmail.com';
	    $mail->Port = 465;
	    $mail->Username = 'webmaster@vectorns.com';
	    $mail->Password = '';*/ 

	    //Recipients
	    $mail->setFrom('sales@rocketsciencesports.com');
	    if($_SESSION['custom']['sport'] == 'swim-cap')  {
	    	$mail->addReplyTo($_SESSION['custom']['email']);
	    	$mail->addAddress('cs@rocketsciencesports.com');     // Add a recipient
	    	
	    	//Content
	    	$mail->isHTML(true);                                  // Set email format to HTML
	    	$mail->Subject = $subject;
	    	$mail->Body    = $msg;
	    	
	    	// send second mail to customer
	    	$mail2 = new PHPMailer(true);
	    	$mail2->SMTPDebug = 0;                                 // Enable verbose debug output
	    	$mail2->isSMTP();                                      // Set mailer to use SMTP
	    	$mail2->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    	$mail2->SMTPAuth = true;                               // Enable SMTP authentication
	    	$mail2->Username = 'sales@rocketsciencesports.com';                 // SMTP username
	    	//$mail2->Password = 'T$67CsNWu;GP';                           // SMTP password
		$mail2->Password = 'R0ck3tSc13nc3!';
	    	$mail2->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	    	//$mail2->Port = 465;                                    // TCP port to connect to
		$mail2->Port = 465;
	    	
	    	//Recipients
	    	$mail2->setFrom('sales@rocketsciencesports.com');
	    	$mail2->addReplyTo('cs@rocketsciencesports.com');
	    	$mail2->addAddress($_SESSION['custom']['email']);     // Add a recipient
	    	
	    	//Content
	    	$mail2->isHTML(true);                                  // Set email format to HTML
	    	$mail2->Subject = $subject;
	    	$mail2->Body    = $msg2;
	    	$mail2->send();
	    } else {
		    $mail->addReplyTo('cs@rocketsciencesports.com');
		    $mail->addAddress($_SESSION['custom']['email']);     // Add a recipient
		    //$mail->addBCC('design@rocketsciencesports.com');
	
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $subject;
		    $mail->Body    = $msg2;
	    }
	    
	    $mail->send();
	} catch (Exception $e) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}


	header("location: https://www.rocketsciencesports.com/custom-thanks");
}
