<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<?php
	require "database.php";
	//Kiểm tra xem người dùng có submit dữ liệu lên server không
	if(isset($_POST['btnCreate'])){
		//Bước 1: Khởi tạo đối tượng CSDL cần thao tác
		
		//Bước 2: Tạo truy vấn theo chức năng tương ứng
		$sql = "INSERT INTO products SET ProductName=? ,UnitPrice=? ,QuantityPerUnit=? ,Description=? ,SupplierID=? ,CategoryID=?, Image=?";

		//Bước 3: Tiến hành Prepare câu truy vấn
		$stmt = $db->prepare($sql);

		$filesName 	= $_FILES['txtFile']['name']; 
		$filesType 	= $_FILES['txtFile']['type'];
		$filesTmp 	= $_FILES['txtFile']['tmp_name'];
		$filesError = $_FILES['txtFile']['error'];
		$filesSize	= $_FILES['txtFile']['size'];
		$status = false;//Biến trạng thái biểu diễn upload thành công hoặc thất bại

		//Kiểm tra trạng thái hợp lệ của các file
		for($i = 0; $i<count($filesName); $i++){
			if(($filesType[$i] == "image/jpeg" || $filesType[$i] == "image/png") && $filesSize[$i] <=20000000 && $filesError[$i] == 0){
				if((move_uploaded_file($filesTmp[$i], "images/".$filesName[$i]))==true){
					$status = true;
				}
			}
		}

		//Bước 4: Truyền giá trị cho các tham số trong câu truy vấn
		$stmt->bindParam(1,$_POST['txtName']);
		$stmt->bindParam(2,$_POST['txtPrice']);
		$stmt->bindParam(3,$_POST['txtQuantity']);
		$stmt->bindParam(4,$_POST['txtDesc']);
		$stmt->bindParam(5,$_POST['cbSupplier']);
		$stmt->bindParam(6,$_POST['cbCategory']);
		$stmt->bindParam(7,implode(";", $filesName));

		//Bước 5: Thực thi câu truy vấn
		

		if($status==true){
			if($stmt->execute()==true){
				//echo "<script>alert('Thêm mới thành công');</script>";
				header("location:index.php");
			}else{
				echo "<div class='alert alert-danger'>Thêm mới thất bại.</div>";
			}
		}
		
	}
	?>
	<div class="container">
		<h3 class="page-header">Thêm mới sản phẩm</h3>
		<form action="" method="post" enctype="multipart/form-data">
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
					<td><input type="file" name="txtFile[]" class="form-control" multiple="true"></td>
				</tr>
				<tr>
					<td>Mô tả chi tiết</td>
					<td>
						<textarea name="txtDesc" class="form-control"></textarea>
						<script>CKEDITOR.replace('txtDesc');</script>
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
								echo '<option value="'.$s1['CategoryID'].'">'.$s1['CategoryName'].'</option>';
							}
						}
						?>
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






