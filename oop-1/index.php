<?php
require_once "product.php";

//Khoi tao doi tuong 'objPro' co kieu class la 'Product' dung 'constructor' khong co tham so
//$objPro = new Product();

//Khoi tao doi tuong 'objPro' co kieu class la 'Product' dung 'constructor' co tham so
$objPro = new Product("B01","BMV X6", 2000000000, 1);

//Goi phuong thuc them du lieu cho doi tuong 'objProduct'
//$objPro->addProduct("Kia01","Kia Rio",100000000,50);

$objPro->getProduct();

?>