<form action="" method="post" enctype="multipart/form-data">
	Hinh anh: 
	<input type="file" name="txtFile[]" multiple="true">
	<input type="submit" name="btnUpload" value="Upload">
	
<?php
	if(isset($_POST['btnUpload'])){
		//$file = $_FILES['txtFile'];
		//echo "<pre>";
		//print_r($_FILES);
		$filesName  = $_FILES['txtFile']['name']; 
		$filesType  = $_FILES['txtFile']['type'];
		$filesTmp   = $_FILES['txtFile']['tmp_name'];
		$filesError = $_FILES['txtFile']['error'];
		$filesSize  = $_FILES['txtFile']['size'];
		//Kiểm tra trạng thái hợp lệ cuả các file
		for($i=0; $i<count($filesName); $i++){
			if(($filesType[$i] == "images/jpeg" || $filesType[$i] == "images/png" || $filesType[$i] == "images/gif") && $filesSize[$i] <= 2000000 && $filesError[$i] == 0){
				move_uploaded_file($filesTmp[$i], "images/".$filesName[$i]);
			}
		}

		//hien thi cac file da upload len sever.
		//inplode: noi caca phan tu de thanh chuoi phan tu;;
		// for($i=0; $i<count($fileName); $i++){
		// 	echo $fileName[$i]."<br>";
		// }
		//nối tên các file lại, ngăn cách bởi dấu ';'
		//$fileName = implode(";", $fileName);
	// 	echo $fileName;
	// 	// di chuyển file vừa upload từ 'tmp' vào thư mục 'upload'
	// 	$tmpName = $_FILES['txtFile']['tmp_name'];
	// 	move_uploaded_file($tmpName, "images/".$fileName);
	 }
?>
</form>