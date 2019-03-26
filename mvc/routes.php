<?php
define("PATH", "http://localhost/itplus/php1018e/php1810_source/mvc");
//Quy dinh ten file controller va ten class se duoc goi la gi

//Tao mot mang de khai bao cac Controller va Action co trong project
$controllers = array(
	'pages'		=> ['home', 'error'],
	'product'	=> ['index','detail','search'],
	'cart'		=> ['add'],
	'customer'	=> ['login','proccess']
);

//Kiem tra xem 'controller' ma nguoi dung goi tren URL co ton tai trong project hay khong
if(!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){
	$controller = "pages";
	$action = "error";
}


//Xac dinh file se duoc truy cap trong thu muc 'controllers'
include_once "controllers/" . $controller . "_" . "controller.php";
$klass = str_replace("_", "", ucwords($controller,'_')). "Controller";

//Khoi tao doi tuong va goi toi action tuong ung
$controller = new $klass;
$controller->$action();

?>







