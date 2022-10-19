<?
$firstname=$_POST['firstname']
$Email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$body .= "Email: " . $Email . "\n";
$body .= "subject: " . $subject . "\n";
$body .= "Message: " . $message . "\n";
//replace with your email
mail("jamie@system22.net","From One-Page Site",$body);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Thank you for choosing AMIXI! A Technician will be with you shortly!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=Index.html">
</head>