<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Website Contact us: ".$_POST['subject'];
$message = $_POST['message'];

$mail_header = "From: ".$name."<".$email.">\r\n";
$reception = "info@omega-opci.com";

mail($reception,$subject,$message,$mail_header)
or die("Info!");

echo'Message sent';

?>