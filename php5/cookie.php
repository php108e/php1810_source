<?php
	//tao cookie
	setcookie('cart','TEST',time()+3600,'/');
	//truy cap de lay gia tri cua Cookie
	echo 'gia tri cua cookie: '.$_COOKIE['cart'];
	//huy cookie
	setcookie('cart','',time()-3600,'/');
	echo '<br>gia tri cua cookie: '.$_COOKIE['cart'];
?>