<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<title></title>
	

</head>
<body>
	<?php
	//yeu cau co so du lieu truoc tien
	//Kiểm tra xem người dùng có submit dữ liệu lên sever hay khoong
	if(isset($_GET['id']) && $_GET['id'] != ''){
	require "database.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM products WHERE productid = ?";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$count = $stmt->rowCount();
	$p =null;
	if ($count>0) {
		$p = $stmt->fetch(PDO::FETCH_ASSOC);
		# code...
	}else{
		$p = null;
	}
	if(isset($_POST['btnUpdate'])){
		$pName = $_POST['txtName'];
		$pPrice = $_POST['txtPrice'];
		$pQuantity = $_POST['txtQuantity'];
		$pDesc = $_POST['txtDesc'];
		$pSupp = $_POST['cbSupplier'];
		$pCat = $_POST['cbCategory'];
		$sql3 = "UPDATE products SET ProductName=?, UnitPrice=?, QuantityPerUnit=?, Description=?, SupplierID=?, CategoryID=? WHERE ProductID=?";
		$stmt3 = $db->prepare($sql3);
		$stmt3->bindParam(1,$pName);
		$stmt3->bindParam(2,$pPrice);
		$stmt3->bindParam(3,$pQuantity);
		$stmt3->bindParam(4,$pDesc);
		$stmt3->bindParam(5,$pSupp);
		$stmt3->bindParam(6,$pCat);
	}
	?>
	<div class="container">
		
		<h3 class="page-header">Cập nhật sản phẩm</h3>
		<?php
		if($stmt3->execute()==true){
			echo"<div class='alert alert-success'>Cập nhật thành công </div>";

		}else{
			echo"<div class='alert alert-danger>Cập nhật thất bại.</div>'";

		}}



		?>
		<form action="" method="post" enctype="multipart-formdata">
			<table class="table table-hover table-bordered table-responsive">
				
				<tr>
					<td>Tên SP</td>
					<td><input type="text" name="txtName" class="form-control" value="<?php echo $p['ProductName']?>"></td>
				</tr>
				<tr>
					<td>Giá</td>
					<td><input type="text" name="txtPrice" class="form-control" value="<?php echo $p['UnitPrice']?>"></td>
				</tr>
				<tr>
					<td>Số lượng</td>
					<td><input type="text" name="txtQuantity" class="form-control" value="<?php echo $p['QuantityPerUnit']?>"></td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					<td><input type="file" name="file" class="form-control" multiple="true"></td>
				</tr>
				<tr>
					<td>Mô tả chi tiếts</td>
					<td>
						<textarea name="txtDesc" cols="100" rows="10"></textarea>
					</td>
				</tr>
				<tr>
					<td>Nhà cung cấp</td>
					<?php
					$sql1 = "SELECT SupplierID, CompanyName FROM suppliers";

					$stmt1 = $db->prepare($sql1);
					$stmt1->execute();
					$count1 = $stmt1->rowCount();
					?>
					<td>

						<select name="cbSupplier" class="form-control">
							<?php
							if($count1>0){
								while ($s = $stmt1->fetch(PDO::FETCH_ASSOC)) {
									echo '<option value="'.$s['SupplierID'].'">'.$s['CompanyName'].'</option>';
									# code...
								}
							}

							?>
							
						</select>
					</td>
				</tr>
				<tr>
					
					<td>Danh mục</td>
					<?php
					$sql2 = "SELECT CategoryID, CategoryName FROM categories";

					$stmt2 = $db->prepare($sql2);
					$stmt2->execute();
					$count2 = $stmt2->rowCount();
					?>
					<td>
						<select name="cbCategory" class="form-control">
							<?php
							if($count2>0){
								while ($s = $stmt2->fetch(PDO::FETCH_ASSOC)) {
									echo '<option value="'.$s['CategoryID'].'">'.$s['CategoryName'].'</option>';
									# code...
								}
							}


							?>
							

						</select>
					</td>
				</tr>
				
					<td></td>
					<td>
						<input type="submit" name="btnCreate" value="Cập nhật" class="form-control">
					</td>
				</tr>

			</table>
			

		</form>
	</div>
<?php 
else{
	header("location:index.php");
} ?>
</body>
</html>