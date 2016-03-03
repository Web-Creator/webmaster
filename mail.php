<?php
header("Content-Type: text/html; charset=utf-8");
?>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $email; $name \n Message: $message";
$recipient = "web.lviv.ua@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header( "refresh:3;url= http://webmaster.lviv.ua/" );
echo "<center><h1>ПОВІДОМЛЕННЯ ВІДПРАВЛЕНО!</p><p>ЧЕРЕЗ 3 СЕКУНДИ ВИ ПОВЕРНЕТЕСЬ НА САЙТ <a href='http://webmaster.lviv.ua/'>WEBMASTER LVIV</a></h1></center>";
?>