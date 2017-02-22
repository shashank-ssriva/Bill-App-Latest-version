$email = new PHPMailer();
$email->From      = 'you@example.com';
$email->FromName  = 'Your Name';
$email->Subject   = 'Message Subject';
$email->Body      = $bodytext;
$email->AddAddress( 'destinationaddress@example.com' );
$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';
$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );
return $email->Send();
