<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$quantity = 1;
	//Lấy dữ liệu của bản ghi từ CSDL theo 'id'
	require "database.php";
	$sql = "SELECT ProductName, Modem, UnitPrice FROM products WHERE ProductID=$id";
	$stmt = $db->prepare($sql);
	$stmt->execute();

	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	//Tạo 1 mảng để chứa dữ liệu từ câu truy vấn
	$row[] = $result;
	// echo "<pre>";
	// print_r($row);

	//Tạo cấu trúc mảng của mỗi phần tử trong Session Cart
	$item = array(
		//key            = value
		$row[0]['Modem'] => array(
			'name' 		=> $row[0]['ProductName'],
			'price'		=> $row[0]['UnitPrice'],
			'quantity'	=> $quantity
		)
	);

	// echo "<pre>";
	// print_r($item);

}else{

}