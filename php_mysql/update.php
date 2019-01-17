<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php
	//Giai đoạn 1: Load dữ liệu của bản ghi trong 'products' theo id tương ứng
	if(isset($_GET['id']) && $_GET['id']!=""){
		require "database.php";
		$id = $_GET['id'];
		$sql = "SELECT * FROM products WHERE productid = ?";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1,$id);
		$stmt->execute();
		$count = $stmt->rowCount();
		$p = null;
		if($count>0){
			$p = $stmt->fetch(PDO::FETCH_ASSOC);
		}else{
			$p = null;
		}

		//Giai đoạn 2: Tiến hành cập nhật dữ liệu trên FORM
		if(isset($_POST['btnUpdate'])){
			//Lấy dữ liệu trên form
			$pName = htmlspecialchars(strip_tags($_POST['txtName']));
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
			$stmt3->bindParam(7,$id);

			if($stmt3->execute()==true){
				echo "<div class='alert alert-success'>Cập nhật thành công.</div>";
			}else{
				echo "<div class='alert alert-danger'>Cập nhật thất bại.</div>";
			}

		}
	?>
	<div class="container">
		<h3 class="page-header">Cập nhật sản phẩm</h3>
		<form action="" method="post" enctype="multipart-formdata">
			<table class="table table-hover table-bordered table-responsive">
				<tr>
					<td>Tên sản phẩm</td>
					<td>
						<input type="text" name="txtName" class="form-control" value="<?php echo $p['ProductName'];?>">
					</td>
				</tr>
				<tr>
					<td>Giá</td>
					<td>
						<input type="text" name="txtPrice" class="form-control" value="<?php echo $p['UnitPrice'];?>">
					</td>
				</tr>
				<tr>
					<td>Số lượng nhập hàng</td>
					<td>
						<input type="text" name="txtQuantity" class="form-control" value="<?php echo $p['QuantityPerUnit'];?>">
					</td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					<td><input type="file" name="file" class="form-control" multiple="true"></td>
				</tr>
				<tr>
					<td>Mô tả chi tiết</td>
					<td>
						<textarea name="txtDesc" class="form-control">
							<?php echo $p['Description'];?>
						</textarea>
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
							while($s = $stmt1->fetch(PDO::FETCH_ASSOC)){
								if($p['SupplierID'] == $s['SupplierID']){
									echo '<option selected value="'.$s['SupplierID'].'">'.$s['CompanyName'].'</option>';
								}else{
									echo '<option value="'.$s['SupplierID'].'">'.$s['CompanyName'].'</option>';
								}
							}
						}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Danh mục</td>
					<?php
						$sql2 = "SELECT * FROM categories";

						$stmt2 = $db->prepare($sql2);
						$stmt2->execute();
						$count2 = $stmt2->rowCount();
					?>
					<td>
						<select name="cbCategory" class="form-control">
						<?php
						if($count2>0){
							while($s1 = $stmt2->fetch(PDO::FETCH_ASSOC)){
								if($p['CategoryID'] == $s1['CategoryID']){
									echo '<option selected value="'.$s1['CategoryID'].'">'.$s1['CategoryName'].'</option>';
								}else{
									echo '<option value="'.$s1['CategoryID'].'">'.$s1['CategoryName'].'</option>';
								}
							}
						}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="btnUpdate" value="Cập nhật" class="form-control btn btn-success">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php
	}else{
		header("location:index.php");
	}
	?>
</body>
</html>






