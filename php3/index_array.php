<?php
	//Cấu trúc tạo mảng kiểu 'index - chỉ số'
	$arrName = array('An', "Bình", 'Dũng', 'Nguyên');
	
	//Thêm một thành viên mới vào mảng $arrName
	$arrayName[4] = "Thọ";

	//Hiển thị các giá trị của các phần tử trong mảng $arrName
	echo "Danh sách các thành viên: ";
	for ($i=0; $i < count($arrName); $i++) { 
		echo $arrName[$i]. ", ";
	}
?>