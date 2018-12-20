<?php
	//Tạo ra một mảng 'Giỏ hàng - cart' có cấu trúc như sau:
	$cart = array(
		'p001'	=> array('name'=>'Iphone X', 'price'=>1000, 'quantity'=>3),
		'p005'	=> array('name'=>'Macbook Pro', 'price'=>3000, 'quantity'=>2),
		'p002'	=> array('name'=>'Adapter', 'price'=>200, 'quantity'=>1)
	);

	$total = 0;
	echo "<table border='1'>";
	echo "<tr>
			<th>Tên SP</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
			</tr>";
	
	foreach ($cart as $k => $v){
		$tt = $v['quantity']*$v['price'];
		echo "<tr>";
		echo "<td>".$v['name']."</td>";
			echo "<td>".$v['price']."</td>";
			echo "<td>".$v['quantity']."</td>";
			echo "<td>".$tt."</td>";
			$total += $tt;
		echo "</tr>";
	}

	echo "<tr><td colspan='3'>Tổng tiển</td><td>".$total."</td></tr>";
	echo "</table>";

?>