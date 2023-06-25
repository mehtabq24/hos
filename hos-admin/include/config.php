<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
if(strpos($actual_link, 'localhost')) {
	$db_host="localhost"; 
	$db_user="root";
	$db_name="hos";
	$db_password="";
}else {
	$db_host="localhost"; 
	$db_user="hos_data_user";
	$db_name="hos_data";
	$db_password="0x1+KN}HPP~F";
}
try
{
	$conn=new PDO("mysql:host={$db_host};dbname={$db_name};port=3306",$db_user,$db_password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connect";
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}
?>