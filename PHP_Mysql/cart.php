<?php
session_start();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$quantity = 1;
	//lấy dự liệu của bản ghi từ CSDL theo 'ID'
	require "database.php";
	$sql = "SELECT ProductName, Modem, UnitPrice FROM products WHERE ProductID=$id";
	$stmt = $db->prepare($sql);
	$stmt->execute();

	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	// fetch(): ham lay du lieu
	$row[] = $result;
	
	//tao cau truc mang cua moi phan tu trong session cart
	$item = array(
		//key.                 = value
		$row[0]['Modem'] => array(
			'Name' => $row[0]['ProductName'],
			'Price' => $row[0]['UnitPrice'],
			'quantity' => $quantity
		)
	);
	// echo "<pre>";
	// print_r($item);
	if(!empty($_SESSION['cart'])){
		//neu da co trong ession -> chi viec tang so luong cua san pham ddo.
		if(in_array($row[0]['Modem'], array_keys($_SESSION['cart']))){
			//tien hanh duyet tung phan tu trong SESSION de kiem tra theo 'key'
			foreach ($_SESSION['cart'] as $key => $value) {
				if($row[0]['Modem'] == $key){
					$_SESSION['cart'][$key]['quantity'] +=1;
				}
			}
		}else{
			//neu san pham can mua chua co trong gio hang -> gop san pham moi vao SESSION
			$_SESSION['cart'] = array_merge($_SESSION['cart'],$item);
		}
	}else{
		//neu
		$_SESSION['cart'] = $item;

	}
	echo "<pre>";
	print_r($_SESSION['cart']);
}else{

}
?>