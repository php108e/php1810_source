<?php
	//Tạo ra coockie
	setcookie('cart','TEST',time()+3600,'/');
	//Truy cao de kay gia tri cua cookie
	echo 'gia tri cua cookie :' .$_COOKIE['cart'];
	//Huy cookie
	setcookie('cart','',time()-3600,'/');
	echo '<br>gia tri cua cookie :' .$_COOKIE['cart'];
?>