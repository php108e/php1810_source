<?php
/**
 * 
 */
require_once "models/customer.php";
require_once "controllers/base_controller.php";

class CustomerController extends BaseController
{
	public function __construct(){
		$this->folder = "customer";
	}

	public function login(){
		$this->render("login");
	}

	public function proccess(){
		if (isset($_POST['btnLogin'])) {
			$email = $_POST['txtEmail'];
			$pass = $_POST['txtPass'];

			$data = CustomerModel::checkLogin($email,$pass);
			$_SESSION['logged_in'] = false;
			if ($data==true) {
				$_SESSION['logged_in'] = true;
				$_SESSION['customer'] = $email;
				header("location:".PATH);
			}else{
				header("location:".PATH.'/?controller=customer&action=login');
			}
		}
	}
}
?>