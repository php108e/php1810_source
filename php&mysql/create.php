<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<title></title>
	

</head>
<body>
	<?php
	//Kiểm tra xem người dùng có submit dữ liệu lên sever hay khoong
	if(isset($_POST['btnCreate'])){ 
	require "database.php";//lay code tu database.php dat vao dong code thu 9
	  //Bước 2:Tạo truy vấn theo chwucs năng tương ứng
	$sql = "INSERT INTO products SET ProductName=? ,UnitPrice=? ,QuantityPerUnit=? ,Description=? ,SupplierID=? ,CategoryID=?";

	//Bước 3:TIens hành prepare câu truy vấn
	$stmt = $db->prepare($sql);

	//Bước 4:Truyền giá trị cho các tham số trong câu truy vấn
	$stmt->bindParam(1,$_POST['txtName']);
	$stmt->bindParam(2,$_POST['txtPrice']);
	$stmt->bindParam(3,$_POST['txtQuantity']);
	$stmt->bindParam(4,$_POST['txtDesc']);
	$stmt->bindParam(5,$_POST['cbSupplier']);
	$stmt->bindParam(6,$_POST['cbCategory']);
	//Upload file php ve doc
	//BƯớc 5 thức thi câu truy vấn

	if($stmt->execute()==true){
		echo "<div class='alert alert-success'>Thêm mới thành công</div>";
	}else{
		echo "<div class='alert alert-danger'>Thêm mới thất bại</div>";
	}
	/*execute()-select -> object(product) -> array(row) (xem trong index.php)
				-insert,update,delete ->true or false

	*/


	}
	?>
	<div class="container">
		
		<h3 class="page-header">Thêm mới sản phẩm</h3>
		<form action="" method="post" enctype="multipart-formdata">
			<table class="table table-hover table-bordered table-responsive">
				
				<tr>
					<td>Tên SP</td>
					<td><input type="text" name="txtName" class="form-control" placeholder="Mời bạn nhập Tên sản phẩm"></td>
				</tr>
				<tr>
					<td>Giá</td>
					<td><input type="text" name="txtPrice" class="form-control" placeholder="Mời bạn nhập Giá sản phẩm"></td>
				</tr>
				<tr>
					<td>Số lượng</td>
					<td><input type="text" name="txtQuantity" class="form-control" placeholder="Mời bạn nhập số luọng sản phẩm"></td>
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
					<td>
						<select name="cbSupplier" class="form-control">
							<option value="1">Apple</option>
							<option value="2">Samsung</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nhà cung cấp</td>
					<td>
						<select name="cbCategory" class="form-control">
							<option value="1">Smart phone</option>
							<option value="2">Destop</option>
							<option value="3">Accessories</option>

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
</body>
</html>