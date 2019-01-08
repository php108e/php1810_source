<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php
	//kiem tra xem nguoi dun co submit du lieu len server hay khong
		if (isset($_POST['btnCreate'])) {
			
			//buoc 1: khoi tao doi tuong CSDL can rhao tac
			require "database.php";
			
			//buoc 2: tao truy van theo chuc nang tuong ung
			$sql = "INSERT INTO products SET ProductName=? , UnitPrice=? , QuantityPerUnit=? , Description=? ,SupplierID=? , CategoryID=? ";
			
			//buoc 3: tien hanh Prepare cau truy van
			$stmt = $db->prepare($sql);

			//buoc 4: truyen gia tri cho cac tham so trong cau truy van
			$stmt->bindParam(1,$_POST['txtName']);
			$stmt->bindParam(2,$_POST['txtPrice']);
			$stmt->bindParam(3,$_POST['txtQuantity']);
			$stmt->bindParam(5,$_POST['txtDesc']);
			$stmt->bindParam(6,$_POST['cbSupplier']);
			$stmt->bindParam(7,$_POST['cbCategory']);

			//buoc 5: thuc thi cau truy van
			if($stmt->execute()==true){
				echo "<div class='alert alert-success'>Thêm mới thành công.</div>";
			}else{
				echo "<div class='alert alert-danger'>Thêm mới thất bại.</div>";
			}

		}
	?>
	<div class="container">
		<h3 class="page-header">Thêm mới sản phẩm</h3>
		<form action="" method="post" enctype="multipart-formdata">
			<table class="table table-hover table-bordered table-responsive">
				<tr>
					<td>Tên sản phẩm</td>
					<td><input type="text" name="txtName" class="form-control" placeholder="Mời nhập tên sản phẩm"></td>
				</tr>
				<tr>
					<td>Giá</td>
					<td><input type="text" name="txtPrice" class="form-control" placeholder="Mời nhập giá sản phẩm"></td>
				</tr>
				<tr>
					<td>Số lượng hàng nhập</td>
					<td><input type="text" name="txtQuantity" class="form-control"></td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					<td><input type="file" name="file" class="form-control" multiple="true"></td>
				</tr>
				<tr>
					<td>Mô tả chi tiết</td>
					<td>
						<textarea name="txtDesc"></textarea>
					</td>
				</tr>
				<tr>
					<td>Nhà cung cấp</td>
					<td>
						<select name="cbSupplier">
							<option value="1">Apple</option>
							<option value="2">Sony</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Danh mục</td>
					<td>
						<select name="cbCategory">
							<option value="1">Smartphone</option>
							<option value="2">Destop</option>
							<option value="3">Accessories</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="btnCreate" value="lưu" class="form-control">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>