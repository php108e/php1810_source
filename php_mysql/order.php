<?php
session_start();
if(!isset($_SESSION['logged_in']) && !isset($_SESSION['user'])){
	header("location: login.php");
}else{
	//Luu du lieu xuong bang 'orders' cua CSDL
	//Ta da co: CustomerId trong SESSION va OrderId la tu dong tang
	$custId = $_SESSION['cust_id'];
	
	$products = $_SESSION['cart'];
	// echo "<pre>";
	// print_r($products);exit();

	//Tien hanh chen du lieu vao bang 'order': CustomerId va OrderId
	require "database.php";
	$sql = "INSERT INTO orders SET CustomerId=?, EmployeeId=?, ShipperId=?";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(1, $custId);
	$stmt->bindValue(2, 1);
	$stmt->bindValue(3, 2);

	if($stmt->execute()==true){//True | False
		//Lấy dữ liệu trong 'OrderId' tức thời để chèn vào bảng 'orderdetails'
		$orderId = $db->lastInsertId();

		//Tiếp tục chèn dữ liệu vào 'orderdetails'
		foreach ($products as $k => $v) {
			$sql1 = "INSERT INTO orderdetails SET OrderId=?, ProductId=?, UnitPrice=?, Quantity=?, Discount=?";
			$stmt1 = $db->prepare($sql1);
			$stmt1->bindParam(1,$orderId);
			$stmt1->bindParam(2,$v['id']);
			$stmt1->bindParam(3,$v['price']);
			$stmt1->bindParam(4,$v['quantity']);
			$stmt1->bindValue(5,0);

			if($stmt1->execute()==true){
				echo "<h1>Đơn hàng đã xử lý thành công. <br>Vui lòng kiểm tra email để biết thông tin đơn hàng của bạn.</h1>";
				//Tiến hành gửi email cho khách hàng

				//Huỷ SESSION['cart']
				unset($_SESSION['cart']);
			}
		}
	}

}
?>