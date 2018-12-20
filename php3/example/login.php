<?php
//Yêu cầu: Tạo ra một mảng tài khoản, trong đó mỗi phần tử của mảng bao gồm: tên đăng nhập và mật khẩu. Viết chương trình kiểm tra dữ liệu đầu vào, nếu tên đăng nhập và mật khẩu trùng với 1 phần tử nào trong mảng tài khoản thì hiển thị đăng nhập thành công. Ngược lại, hiển thị đăng nhập thất bại.

$account = array(
	'admin' => '1234',
	'user'  => '123',
	'manager' => 'abcd'
);


$user = "manager";
$pass = "manager";

$flag = 0;

foreach ($account as $key => $value) {
	if ($user == $key && $pass == $value) {
		$flag = 1;
		break;
	}
}

if($flag==1){
	echo "đăng nhập thành công";
}else{
	echo "đăng nhập thất bại";
}



?>