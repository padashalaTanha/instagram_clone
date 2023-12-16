<?php
require 'PHPMailer/PHPMailerAutoload.php';
session_start();
$email = $_SESSION['email'];
$otp = rand(10000,99999);
$_SESSION['otp'] = $otp;


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true; 
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->Username = 'tanhapadashala12@gmail.com';
$mail->Password = 'rvvodvlmbymvigyg';           

$mail->setFrom($email, 'RNW');
$mail->addReplyTo($email, 'RNW');
$mail->addAddress($email);   
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Your OTP is Here</h1>';
$bodyContent .= "<p>OTP:<b>$otp</b></p>";

$mail->Subject = 'Email from Localhost by CodexWorld';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    // echo 'Message has been sent';
    ?>
      <script>
        window.location = "otp_check.php";
      </script>
    <?php
}
?>
