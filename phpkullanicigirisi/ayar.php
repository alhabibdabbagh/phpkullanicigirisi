<?php
$host="localhost";
$db="mydb";
$user="murat";
$pass="123456";
$conn=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");

mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_set_charset('latin5',$conn);
?>