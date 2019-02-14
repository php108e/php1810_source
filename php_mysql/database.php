<?php
//khoi tao doi tuong CSDL can thao tac
$db_sever = "localhost";
$db_name = "php1018e";
$db_user = "root";
$db_pass = "";
$db = null;
try{
	$db = new PDO("mysql:dbname={$db_name};host={$db_sever};charset=utf8",$db_user,$db_pass);
}catch(PDOException $ex){
	die("lỗi:".$ex->getMessage());
}
?>