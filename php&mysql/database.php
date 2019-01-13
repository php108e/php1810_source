<?php
//Bước 1: khoi tao doi tuong csdl can thao tac


$db_sever = "localhost";
$db_name = "phpcomer";
$db_user = "root";
$db_pass = "";
$db = null;// db la doi tuong ko phai bien nen de =null
try{//nhung doan code hay say ra loi khach quan nen de trong try 
$db = new PDO("mysql:dbname={$db_name};host={$db_sever};charset=utf8",$db_user,$db_pass);
}catch(PDOException $ex){
	die("Error: ".$ex->getMessage());
}




?>