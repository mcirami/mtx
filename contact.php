<?php
//ini_set('display_errors', 1);
$page = 'contact';

include 'header.php';

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;

use League\OAuth2\Client\Provider\Google;

/*require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';*/

date_default_timezone_set('America/Los_Angeles');

//Load dependencies from composer
//If this causes an error, run 'composer install'
require 'vendor/autoload.php';

$mailSent = false;
$nameErr = $emailErr = $userMessageErr = "";
$name = $userEmail = $userMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$post = true;

	if(isset($_GET['email'])) {
		$emailTemplate = $_GET['email'];
	} else {
		$emailTemplate = '';
	}

	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
		$post = false;
	} else {
		$name = test_input($_POST["name"]);

		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
			$post = false;
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$post = false;
	} else {
		$userEmail = test_input($_POST["email"]);

		if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
			$post = false;
		}
	}

	if (empty($_POST["message"])) {
		$userMessageErr = "Message is required";
		$post = false;
	} else {
		$userMessage = test_input($_POST["message"]);
	}

	if ($post != false) {

		$_POST['submit'] = "success";

		$mail = new PHPMailer(true);

		try {
			$name = $_POST["name"]; // HINT: use preg_replace() to filter the data
			$email = $_POST["email"];
			$userMessage = $_POST["message"];

			$mail->SMTPDebug = 0;
			$mail->IsSMTP(); // set mailer to use SMTP
			$mail->Host = "smtp.gmail.com";  // specify main and backup server
			$mail->SMTPAuth = true;     // turn on SMTP authentication
			$mail->AuthType = 'XOAUTH2';
			$mail->SMTPSecure = "ssl";
			$mail->Port = 465;
			$mail->CharSet = "UTF-8";
			//$mail->Username = "contact@mtxse.com";  // SMTP username
			//$mail->Password = "l47$7Dy3D@4"; // SMTP password
			$email = 'contact@mtxse.com';
			$clientId = '104425735709-hvsuvt2vg61r3ec4051f2eo4fd6icm84.apps.googleusercontent.com';
			$clientSecret = 't59UtOQop1xdVjIOW_d7hh8r';
			$refreshToken = '1/hujYfG0qRtG9N_5-OrKmyTpIm6gbk8n_VQIY2Df4nbs';

			//Create a new OAuth2 provider instance
			$provider = new Google(
				[
					'clientId' => $clientId,
					'clientSecret' => $clientSecret,
				]
			);

			//Pass the OAuth provider instance to PHPMailer
			$mail->setOAuth(
				new OAuth(
					[
						'provider' => $provider,
						'clientId' => $clientId,
						'clientSecret' => $clientSecret,
						'refreshToken' => $refreshToken,
						'userName' => $email,
					]
				)
			);

			//Set who the message is to be sent from
			//For gmail, this generally needs to be the same as the user you logged in as
			$mail->setFrom($email);

			$mail->AddAddress($email);

			//$mail->AddAddress("ellen@example.com");                  // name is optional
			$mail->AddReplyTo($userEmail, $name);

			$mail->WordWrap = 50;                                 // set word wrap to 50 characters
			//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
			//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
			$mail->IsHTML(true);                                  // set email format to HTML

			$mail->Subject = "MTX Contact Form";

			$message = "Name: " . $name .
			           "<br>Email: " . $userEmail .
			           "<br>Message: " . $userMessage;

			$mail->Body = $message;
			$mail->AltBody = $message;

			/*if (!$mail->Send()) {
				echo "Message could not be sent. <p>";
				//echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "success";
			}*/

			$mail->send();
			//echo 'Message has been sent';
			$mailSent = true;

		} catch (Exception $e) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $e;
		}

	}
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

	<div class="full_width page_content contact">

		<?php if (!isset($_POST['submit']) || $mailSent == false) : ?>

			<h2 class="text-center">Contact MTX with any questions you may have.</h2>

			<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">

				<div class="form-group">
					<label for="name">Name</label>
					<input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Your Name"
					       value="<?php if (isset($_POST['name'])) { echo $_POST['name']; } ?>" required>

					<div class="errors">
						<p class="text-danger"><?php echo $nameErr; ?></p>
					</div>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email Address"
					       value="<?php if (isset($_POST['email'])) { echo $_POST['email'];} ?>" required>

					<div class="errors">
						<p class="text-danger"><?php echo $emailErr; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea rows=6 name="message" class="form-control" id="message" placeholder="Enter Your Message"
					          required><?php if (isset($_POST['message'])) { echo $_POST['message'];} ?></textarea>

					<div class="errors">
						<p class="text-danger"><?php echo $userMessageErr; ?></p>
					</div>
				</div>

				<button type="submit" class="button red text-uppercase">Send</button>
			</form>

		<?php else : ?>

			<div class="text-center success_message">
				<h2 class="text-uppercase">Thanks for Your Inquiry!</h2>
				<p>We will get back to you as soon as possible!</p>
			</div>

		<?php endif; ?>

	</div><!-- full_width page_content -->

<?php
include 'footer.php';
?>
