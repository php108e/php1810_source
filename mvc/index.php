<?php
//Goi doi tuong CSDL
require_once "database.php";

//Xac dinh Controller va Action dang duoc goi la gi tren URL
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}else{
		$action = "index";
	}
}else{
	//Khong co tso 'controller' thi mac dinh se co gia tri
	$controller = "product";
	$action = "index";
}

require_once "routes.php";
?>