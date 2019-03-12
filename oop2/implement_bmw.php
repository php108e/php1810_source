<!DOCTYPE html>
<html>
<head>
	<title>Thuc thi lop BMW</title>
</head>
<body>
	<?php
	require_once "bmw.php";
	//Khoi tao doi tuong co kieu "BMW"
	$b = new BMW();
	//Truy cap toi phuong thuc cua chinh no
	$b->acceptBMW(2000000000);

	//Truy cap toi phuong thuc cua chinh no
	$b->displayBMW();
	?>
</body>
</html>