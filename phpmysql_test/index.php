<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Nhập tên sản phẩm cần tìm:
		<input type="text" name="search">
		<input type="submit" name="btnSearch" value="Tìm kiếm">
	</form>

	<?php
		require "database.php";
		echo "<table border='1'>";
		echo "<tr><td>Tên sản phẩm</td><td>Giá</td><td>Số lượng</td></tr>";
		if(isset($_POST['btnSearch'])){
			$ten = $_POST['search'];
			if($ten != ""){
				$query1 = "SELECT * FROM tbl_sanpham WHERE ten LIKE '%".$ten."%'";
				$stmt1 = $db->prepare($query1);
				$stmt1->execute();

				while($sp1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
					echo "<tr>";
						echo "<td>".$sp1['ten']."</td>";
						echo "<td>".$sp1['gia']."</td>";
						echo "<td>".$sp1['soluong']."</td>";
					echo "</tr>";
				}
			}
		}else{

			$query = "SELECT * FROM tbl_sanpham";
			$stmt = $db->prepare($query);
			$stmt->execute();

			while($sp = $stmt->fetch(PDO::FETCH_ASSOC)){
				echo "<tr>";
					echo "<td>".$sp['ten']."</td>";
					echo "<td>".$sp['gia']."</td>";
					echo "<td>".$sp['soluong']."</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
	?>
</body>
</html>






