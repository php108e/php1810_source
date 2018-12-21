<?php
	//tao cookie
	setcookie('cart','TEST', time()+3600,'/');

	//truy cập để lấy giá trị của cookie
	echo 'giá trị của cookie '.$_COOKIE['cart'];

	//huy coockie
	setcookie('cart','',time()-3600,'/');
	echo '<br>giá trị của cookie '.$_COOKIE['cart'];
?>