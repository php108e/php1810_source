<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script type="text/javascript">
		function xoa(id){
			var result = window.confirm("Bạn có chắc muốn xoá sản phẩm có mã: "+id);
			if(result==true){
				window.location.href= "delete.php?id="+id;
			}
		}
	</script>
	
</head>
<body>

<?php
	//Bước 1
	require "database.php";
	//Bước 2
	$sql = "SELECT * FROM products";
	//Bước 3
	$stmt = $db->prepare($sql);
	//Bước 5
	$stmt->execute();

	$count = $stmt->rowCount();

	if($count>0){
		//Biểu diễn dữ liệu
		?>
		<div class="container">
			<div class="row page-header">
				<div class="col-xs-6">
<<<<<<< HEAD
					<h3 class="page-header">Danh sach san pham</h3>
				</div>
				<div class="col-xs-6">
					<a href="create.php " class="
					btn btn-success">Thêm mới</a>
				</div>
			</div>
			
=======
					<h4>Danh sach san pham</h4>
				</div>
				<div class="col-xs-6" style="text-align: right;">
					<a href="create.php" class="btn btn-success">Thêm mới</a>
				</div>
			</div>

>>>>>>> a8e466ec6ac4f70e87000bbbb7c8026ff2ac5750
			<table class="table table-hover table-bordered table-responsive">
				<tr>
					<th>Ten</th><th>Gia</th><th>So luong nhap kho</th><th>Chuc nang</th>
				</tr>
		<?php
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>";
				echo "<td><a href='detail.php?id=".$row['ProductID']."'>";
				echo $row['ProductName'];
				echo "</a></td>";
				echo "<td>".$row['UnitPrice']."</td>";
				echo "<td>".$row['QuantityPerUnit']."</td>";
				echo "<td>";
					$id = $row['ProductID'];
					echo "<a href='update.php?id=".$row['ProductID']."'>Sua</a>";
					echo "<a href='#' onclick='xoa(".$id.");'>Xoa</a>";
				echo "</td>";
			echo "</tr>";
		}
		?>
			</table>
		</div>
		<?php
	}
?>

</body>
</html>






