<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php
	require "database.php";
	//Kiểm tra xem người dùng có submit dữ liệu lên server không
	if(isset($_POST['btnCreate'])){
		//Bước 1: Khởi tạo đối tượng CSDL cần thao tác
		
		//Bước 2: Tạo truy vấn theo chức năng tương ứng
		$sql = "INSERT INTO products SET ProductName=? ,UnitPrice=? ,QuantityPerUnit=? ,Description=? ,SupplierID=? ,CategoryID=?";

		//Bước 3: Tiến hành Prepare câu truy vấn
		$stmt = $db->prepare($sql);

		//Bước 4: Truyền giá trị cho các tham số trong câu truy vấn
		$stmt->bindParam(1,$_POST['txtName']);
		$stmt->bindParam(2,$_POST['txtPrice']);
		$stmt->bindParam(3,$_POST['txtQuantity']);
		$stmt->bindParam(4,$_POST['txtDesc']);
		$stmt->bindParam(5,$_POST['cbSupplier']);
		$stmt->bindParam(6,$_POST['cbCategory']);

		//Bước 5: Thực thi câu truy vấn
		if($stmt->execute()==true){
			//echo "<script>alert('Thêm mới thành công');</script>";
			header("location:index.php");
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
					<td>Số lượng nhập hàng</td>
					<td><input type="text" name="txtQuantity" class="form-control"></td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					<td><input type="file" name="file" class="form-control" multiple="true"></td>
				</tr>
				<tr>
					<td>Mô tả chi tiết</td>
					<td>
						<textarea name="txtDesc" class="form-control"></textarea>
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
								echo '<option value="'.$s['SupplierID'].'">'.$s['CompanyName'].'</option>';
							}
						}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Danh mục</td>
					<td>
						<select name="cbCategory" class="form-control">
							<option value="1">Smart phone</option>
							<option value="3">Destop</option>
							<option value="4">Accessories</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="btnCreate" value="Lưu" class="form-control btn btn-success">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>






