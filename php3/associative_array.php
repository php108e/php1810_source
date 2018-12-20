<?php
	//Tạo ra một mảng kết hợp '$arrProduct'

	$arrProduct = array(
		"P001"	=>	"Iphone X",
		"P004"	=>	"Samsung Note 9",
		"P008"	=>	"Nokia Lumia"
	);

	//Thêm mới một phần tử đến mảng
	$arrProduct['P003'] = 'BPhone 3';
	$arrProduct['P010'] = 'Xaomi';


	//Hiển thị các phần tử trong mảng
	echo "<table border='1'>";
	echo "<tr><th>Ma SP</th><th>Ten SP</th></tr>";
	foreach ($arrProduct as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td>";
		echo "<td>".$value."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>


