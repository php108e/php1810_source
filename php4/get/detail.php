<!DOCTYPE html>
<html>
<head>
	<title>Trang chi tiết</title>
</head>
<body>
	<?php
	//Kiểm tra sự tồn tại 'id' và 'catid' trên URL
	//Nếu tồn tại đồng thời thì hiển thị chi tiết SP
	//Nếu không tồn tại, thì điều hướng về 'index.php'

	if (isset($_GET['id']) && isset($_GET['catid'])) {
		//Lấy giá trị của tham số trên URL
		$masp = $_GET['id'];
		$madm = $_GET['catid'];

		echo "Mã sản phẩm: ". $masp;

		if($madm==1){
			echo "<br>Sản phẩm thuộc danh mục Labtop";
		}elseif ($madm==2) {
			echo "<br>Sản phẩm thuộc danh mục Computer";
		}
	}else{
		header("location:index.php");
	}
	
	?>
</body>
</html>