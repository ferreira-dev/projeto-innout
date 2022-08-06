<?php

require_once(VENDOR_PATH . "/autoload.php");

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
    ->setUsername('49a8f2520f22f2')
    ->setPassword('80cb2882ae70ea');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['john@doe.com' => 'John Doe'])
    // ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name']) // varios
    ->setTo(['fabroide@gmail.com' => 'A name'])
    ->setBody('corpo da mensagem com direito a <b>HTML</b>', 'text/html');

// Send the message
$result = $mailer->send($message);
print_r('<pre>');
print_r($result);
print_r('<hr>');
print_r(gettype($result));
