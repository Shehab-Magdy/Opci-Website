<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Website Contact us: ".$_POST['subject'];
$message = $_POST['message'];

$mail_header = "From: ".$name."<".$email.">\r\n";
$reception = "cegres1@gmail.com";

mail($reception,$subject,$message,$mail_header)
or die("Error!");

echo'Message sent';

?>