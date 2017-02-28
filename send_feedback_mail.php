<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Feedback Form</title>
  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
</head>
<body>
  <fieldset>

  <h2>Bill Claims Management Application</h2>
  <h3><legend>Your Feedback</legend></h3>
</fieldset>
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $to = 'shashanksrivastava@xebia.com';
  $subject = 'ExClaiMadeEasy - Feedback Form';
  $msg = "$name has submitted below feedback for your Application. Please review it. \n" .
    "Feedback = $feedback";
  mail($to, $subject, $msg, 'From:' . $email);

  echo 'Hi ' . $name. ', Thanks for submitting the feedback.<br />';
  echo 'Your email address is ' . $email . '<br />' ;
  echo 'Here is what you have submitted: ' . $feedback . '<br />';
?>

</body>
</html>
