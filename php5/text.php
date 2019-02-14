<?php
	//Tạo cookie
	setcookie('cart','test', time()+3600,'/');
	//Truy cập để lấy giá trị của Cookie
	echo 'Lấy giá trị của cookie'.$_COOKIE['cart'];
	//Hủy COOKIE
	setcookie('cart','test', time()-3600,'/');
	echo 'Lấy giá trị của cookie'.$_COOKIE['cart'];
?>