<?php
//Kiem tra su ton tai cua 'id' tren URL
if (isset($_GET['id']) && $_GET['id']!="") {
	//Lay gia tri cua tham so 'id' tren URL
	$ma = $_GET['id'];
	require "database.php";
	$query = "DELETE FROM products WHERE productID = ?";
	$stmt = $db->prepare($query);
	$stmt->bindParam(1,$ma);
	
	if($stmt->execute()){
		header("location:index.php");
	}

}else{
	header("location:index.php");
}
?>