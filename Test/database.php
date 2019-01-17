<?php
$sever = "localhost";
$db_name = "qlbh2";
$user = "root";
$pass = "";

$db = null;
try {
	$db = new PDO("mysql:host=$sever;dbname=$db_name;charset=utf8",$user,$pass);

}catch (PDOEExceptation $e){
	die("Lỗi:". $e->getMassage());
}