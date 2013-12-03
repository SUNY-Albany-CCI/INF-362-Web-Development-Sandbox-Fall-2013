<?php

$myemail = "jarelt.41@gmail.com";

$fName = ($_POST['fName']);
$lName = ($_POST['lName']);
$email = ($_POST['Email']);
$comment =($_POST['Comment']);
$subject = "Contact Form";
$message = "

Name: $fName $lName
E-mail: $email

Message: $comment";

mail($myemail,$subject,$message);
?>