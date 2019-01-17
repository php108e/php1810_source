<form action="" method="post" enctype="multipart/form-data">
	Hình ảnh: 
	<input type="file" name="txtFile[]" multiple="true">
	<input type="submit" name="btnUpload" value="Upload">
</form>

<?php
	if(isset($_POST['btnUpload'])){
		//$file = $_FILES['txtFile'];
		// echo "<pre>";
		// print_r($file);die();
		$filesName 	= $_FILES['txtFile']['name']; 
		$filesType 	= $_FILES['txtFile']['type'];
		$filesTmp 	= $_FILES['txtFile']['tmp_name'];
		$filesError = $_FILES['txtFile']['error'];
		$filesSize	= $_FILES['txtFile']['size'];

		//Kiểm tra trạng thái hợp lệ của các file
		for($i = 0; $i<count($filesName); $i++){
			if($filesType[$i] == "image/jpeg" || $filesType[$i] == "image/png") && $filesSize[$i] <=20000000 && $filesError[$i] == 0){
				if(move_uploaded_file($filesTmp[$i], "images/".$filesName[$i]);
			}
		}

	}
?>





