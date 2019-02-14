<?php
	session_start();
	//Tao mot CSDL gia lap chua cac TK nguoi dung
	$account = array(
		'admin'		=>	'123456',
		'manager'	=>	'123',
		'member'	=>	'abc123'
	);
	

	//Kiem tra nguoi dung co click vao nut 'btnLogin'
	if (isset($_POST['btnLogin'])) {
		//Tien hanh lay du lieu tren FORM va xu ly dang nhap
		$user = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
		

		require("lib.php");// OR Include

		//Kiem tra su ton tai cua nguoi dung trong mang $account
		require "libs.php";
		
		if(checkLogin($user,$pass,$account)==true){
			//Cap phien lam viec cho user
			$_SESSION['login'] 		= $user;
			$_SESSION['loggedin'] 	= true;
			setcookie('user',$user,time()+3600);
			setcookie('pass',$pass,time()+3600);
			//dieu huong ve index
			header("location:index.php");
			
		}else{
			header("location:login.php");
		}

	}else{
		header("location:login.php");
	}
?>




