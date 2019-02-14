<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript">
		function xoa(id) {
			var result = window.confirm("Bạn có chắc muốn xóa sản phẩm có mã: "+id);
			if (result==true) {
				window.location.href="delete.php?id="+id;
			}
		}
	</script>
	<?php
	//Bước 1
	require "database.php";
	//Bước 2
	$sql = "SELECT * FROM hang_dienthoai";
	//Bước 3
	$stmt = $db->prepare($sql);
	//Bước 5
	$stmt->execute();

	$count = $stmt->rowCount();

	if($count>0){
		//Biểu diễn dữ liện
		?>
</head>
<body>
	<h1 style="text-align: center;">QUẢN LÝ ĐIỆN THOẠI</h1>
	<p style="text-align: center;">Tìm kiếm <input type="text" name="txtSearch" placeholder="Tìm kiếm sản phẩm"></p>
	<table border="boddered" align="center"><tr><th>Tên điện thoại</th>
					<th>Hãng điện thoại</th>
					<th>Màu sắc</th>
					<th>Giá tiền</th>	<th>Mô tả</th>	<th>Ngày đăng</th> 	<th>Trạng thái</th> 	<th>Thao tác</th></tr><?php
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$ma_hang = $row['ma_hang'];
				$sql1 = "SELECT * FROM hang_dienthoai where ma_hang = $ma_hang";
				$stmt1 = $db -> prepare($sql1);
				$stmt1 -> execute();
				$hang = $stmt1->fetch(PDO::FETCH_ASSOC);
				
				echo"<tr>"




				echo "</tr>";
		?></table>


</body>
</html>