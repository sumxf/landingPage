<?php
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';


$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'erjssumxf@gmail.com';                   // SMTP username
$mail->Password = 'HWVer1BIBA';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;   //Set the SMTP port number - 587 for authenticated TLS
$email =  $_POST['email'];
$name =  $_POST['name'];
$comments = $_POST['comments'];

//echo $email;
//echo "something";

$mail->setFrom($email, "erjs.io Feedback");     //Set who the message is to be sent from
$mail->addReplyTo($email, $name);  //Set an alternative reply-to address
$mail->addAddress('support@erjs.io', 'Support ERJS');  // Add a recipient
//$mail->addAddress('mainakd@gmail.com');               // Name is optional
$mail->addCC('mainakd@gmail.com');
$mail->addCC('navmay@gmail.com');
$mail->addCC('sushree.preeti@gmail.com');
//$mail->addBCC('bcc@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(false);                                  // Set email format to HTML
$mail->Subject = 'Feedback from '.$name;
$mail->Body    = $comments;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//$mail->SMTPDebug = 2;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent. <BR>';
echo 'Go back to <a href="https://www.erjs.io">ERJS.io</a>'
?>