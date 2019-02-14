<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_POST['themmoi'])){
		$ten = $_POST['ten'];
		$gia = $_POST['gia'];
		$soluon = $_POST['soluong'];
		$nam = $_POST['nam'];
		$hang = $_POST['hang'];
		$tomtat = $_POST['tomtat'];

		require'database.php';
		$query = "INSERT INTO tbl_Sanpham(ten,gia,soluong,nam,hang,tomtat)
		            VALUES(?,?,?,?,?,?)";

		    $stmt->prepare($query);
		     $stmt->bindParam(1,$ten);
		     $stmt->bindParam(2,$gia);
		      $stmt->bindParam(3,$soluong);
		       $stmt->bindParam(4,$nam);
		        $stmt->bindParam(5,$hang);
		         $stmt->bindParam(6,$tomtat);
		         if($stmt->Execute()){
		         	header("location:index.php");

		         }else{
		         	header("location:index.php");
		         }
	}
	
	?>
	<form>
		<table>
			<tr>
				<td colspan="2">Chức năng thêm mới sản phẩm</td>
			</tr>
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="ten"></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><input type="text" name="gia"></td>
			</tr>
			<tr>
				<td>Số lượng</td>
				<td><input type="text" name="soluong"></td>
			</tr>
			<tr>
				<td>Năm sản xuất</td>
				<td><input type="text" name="nam"></td>
			</tr>
			<tr>
				<td>Hãng</td>
				<td><input type="text" name="hang"></td>
			</tr>
			<tr>
				<td>Tóm tắt</td>
				<td>
					<textarea name="tomtat" cols="50" row"10"></textarea>
				</td>
			</tr>
			<tr>
				<td>T</td>
				<td><input type="submit" name="themmoi" value="Thêm mới"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>