<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	//Đặt mã nguồn PHP tại đây
	$age = 31;
	//Định nghĩa một hằng số
	define("AGE", 30);

	$name = "ThoPN";
	$country = 'Nam Định';
	$gender = false;
	echo "Họ tên: ". $name;
	//echo "<br>Tuổi: ". AGE; //Hiển thị giá trị của hằng số

	//Xác định lứa tuổi
	if($age>0 && $age<14){
		echo "<br>Lứa tuổi trẻ em.";
	}elseif ($age>=14 && $age <18) {
		echo "<br>Lứa tuổi vị thành niên.";
	}elseif($age>=18 && $age<=30){
		echo "<br>Lứa tuổi trưởng thành.";
	}else{
		echo "<br>Lứa tuổi ông già.";
	}


	echo "<br>Quê quán: ". $country;

	if($gender==true){
		echo "<br>Giới tính: Nam";
	}else{
		echo "<br>Giới tính: Nữ";
	}
	
	

	?>
	
</body>
</html>



