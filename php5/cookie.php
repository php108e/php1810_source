<?php
	//Tao cookie
	setcookie('cart','TEST',time()+3600,'/');

	//Truy cap de lay gia tri cua Cookie
	echo 'gia tri cua cookie: '.$_COOKIE['cart'];

	//Huy cookie
	setcookie('cart','',time()-3600,'/');
	echo '<br>gia tri cua cookie: '.$_COOKIE['cart'];
?>