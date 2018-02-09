<?php

require_once 'swiftmailer/lib/swift_required.php';
// ...

// make sure you get these SMTP settings right
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl") 
    ->setUsername('erjssumxf@gmail.com')
    ->setPassword('HWVer1BIBA');

$mailer = Swift_Mailer::newInstance($transport);
// the message itself
$message = Swift_Message::newInstance('email subject')
    ->setFrom(array('erjssumxf@gmail.com' => 'no reply'))
    ->setTo(array('support@erjs.io'))
    ->setBody("email body");

$result = $mailer->send($message);

// ...
?>