<?php
	//Tạo cookie
	setcookie('cart', 'TEST' , time()+3600, '/');
	

	//Truy cập để lấy giá trị của cookie
	echo 'giá trị của cookie:' .$_COOKIE['cart'];

	//Hủy cookie
	setcookie('cart' , '',time()-3600,'/');
	echo '<br> giá trị của cookie:' .$_COOKIE['cart'];
?>