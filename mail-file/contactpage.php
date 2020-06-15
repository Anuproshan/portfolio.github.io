<?php
$Firstname=$_POST['Firstname'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];

mail($name, $email, $subject, $message, "Thank You All...!");

?>