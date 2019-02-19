<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Trang dang nhap
	<form action="" method="post">
		Ten dang nhap
		<input type="text" name="txtEmail"><br>
		Mat khau
		<input type="password" name="txtPass"><br>
		<input type="submit" name="btnLogin" value="Dang nhap">
	</form>
</body>
</html>

<?php
if(isset($_POST['btnLogin'])){
	$email = $_POST['txtEmail'];
	$password = $_POST['txtPass'];

	require "database.php";

	$sql = "SELECT CustomerId, Email, Password, Fullname FROM Customers WHERE Email=? AND Password=?";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(1, $email);
	$stmt->bindParam(2, $password);
	$stmt->execute();
	$count = $stmt->rowCount();
	if($count>0){
		$cust = $stmt->fetch(PDO::FETCH_ASSOC);
		//Cap phien lam viec
		$_SESSION['logged_in'] = true;
		$_SESSION['user'] = $cust['Fullname'];
		$_SESSION['cust_id'] = $cust['CustomerId'];
		header("location:checkout.php");
	}else{
		echo "Dang nhap khong thanh cong";
	}
}
?>







