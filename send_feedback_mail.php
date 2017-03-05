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
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $to = 'shashanksrivastava@xebia.com';
  $subject = 'ExClaiMadeEasy - Feedback from ' .$name . '-' .$email;
  $msg = "$name has submitted below feedback for your Application. Please review it. \n" .
    "Feedback = $feedback";
  if((!empty($name)) && (!empty($email)) && (!empty($feedback))){
        mail($to, $subject, $msg, 'From:' . $email);
        echo 'Hi ' . $name. ', Thanks for submitting your feedback. Developers will try to work on it after reviewing.<br />';
        echo 'Your email address is: ' . "<i>" . $email . "</i>". '<br />' ;
        echo 'Here is what you have submitted: ' . "<b>" . $feedback . "</b>". '<br />';
  }
  else {
    echo "Please fill in all the required fields. P.S : - I am not good at client-side validation :-D";
  }
?>
<div>
<style scoped>

.button-success,
.button-error,
.button-warning,
.button-secondary {
  color: white;
  border-radius: 4px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}

.button-success {
  background: rgb(28, 184, 65); /* this is a green */
}

.button-error {
  background: rgb(202, 60, 60); /* this is a maroon */
}

.button-warning {
  background: rgb(223, 117, 20); /* this is an orange */
}

.button-secondary {
  background: rgb(66, 184, 221); /* this is a light blue */
}

</style>
<br>
<input type="submit" class="pure-button pure-button-primary" value="Back" onclick="location.href='feedback.html';"">
</div>
</fieldset>
</body>
</html>
