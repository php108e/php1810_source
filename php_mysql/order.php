<?php
session_start();
if(!isset($_SESSION['logged_in']) && !isset($_SESSION['user'])){
	header("location: login.php");
}else{
	//Luu du lieu xuong bang 'orders' cua CSDL
	//Ta da co: CustomerId trong SESSION va OrderId la tu dong tang
	$custId = $_SESSION['cust_id'];

	//Tien hanh chen du lieu vao bang 'order': CustomerId va OrderId

	//Lay duoc OderId thong qua ham lastInsertId() cua $db, dong thoi mang OrderId vua tao ra + ProductId chen vao bang "Order_Details"


}
?>