<?php
	$server = "localhost";
	$db_name = "qlbh22";
	$user = "root";
	$pass = "";

	$db = null;

	try {
		$db = new PDO("mysql:host=$server;dbname=$db_name;charset=utf8",$user,$pass);
	} catch (PDOException $e) {
		die("Lỗi:". $e->getMessage());
	}
?>