<?php
$subject = "A new subscriber want to know our news";
$message = $_POST['s.email'];

$mail_header = "Please add this email to your subscribers list"."\r\n";
$reception = "sales@omega-opci.com";

mail($reception,$subject,$message,$mail_header)
or die("Error!");

echo'Message sent';

?>