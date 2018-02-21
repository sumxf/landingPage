<?php

require_once 'swiftmailer/lib/swift_required.php';
// ...

// make sure you get these SMTP settings right
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('erjssumxf@gmail.com')
    ->setPassword('HWVer1BIBA');

$mailer = new Swift_Mailer($transport);
// the message itself
$message = (new Swift_Message('email subject'))
    ->setFrom(array('erjssumxf@gmail.com' => 'no reply'))
    ->setTo(array('support@erjs.io'))
    ->setBody("email body",'text/html');

$result = $mailer->send($message);

// ...
?>