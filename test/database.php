<?php
	$db_server = "localhost";
	$db_name = "dienthoai";
	$db_user = "root";
	$db_pass = ""; //Giá trị rỗng

	$db = null;

	try{
		$db = new PDO("mysql:dbname={$db_name};host={$db_server};charset=utf8",$db_user,$db_pass);
	}catch(PDOException $ex){
		die("Lỗi:". $ex->getMessage());
	}
?>