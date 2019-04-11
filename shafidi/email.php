<?php

if(isset($_POST['email'])){

$email = $_POST['email'];;
$form = "subcribe@shafidi.com";

$to = "mo7rul@gmail.com";

$subject = "Demo Request";
$message = "There is a new subscribe email: ".$email;
$headers = "From: $form";
//send email

mail($to, $subject, $message, $headers);
}

if(isset($_POST['email'])){

$email = $_POST['email'];
$form = "no-replay@shafidi.com";

$to = "$email";

$subject = "Thank you";
$message = "Thank You for your Subscribe";
$headers = "From: $form";
//send email

mail($to, $subject, $message, $headers);
}


if(isset($_POST['qsubmit'])){

$fullName = $_POST['fullName'];
$subject = $_POST['subject'];
$number = $_POST['number'];
$qemail = $_POST['qemail'];
$message = $_POST['message'];

$form = "subcribe@shafidi.com Email : ". $qemail;

$to = "mo7rul@gmail.com";

$subject = "Quick Contact";
$message = "Form Name :a <br>".$fullName."<br>Mobile No :".$number."<br>Email Address :".$qemail."<br>".$message;
$headers = "From: $form";
//send email

mail($to, $subject, $message, $headers);
}


?>
