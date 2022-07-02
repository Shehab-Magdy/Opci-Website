<?php
$subject = "A new subscriber want to know our news";
$message = $_POST['s_email'];

$mail_header = "Please add this email to our subscribers list"."\r\n";
$reception = "sales@omega-opci.com";

mail($reception,$subject,$message,$mail_header)
or die("Info!");
echo "Thank You!";

?>