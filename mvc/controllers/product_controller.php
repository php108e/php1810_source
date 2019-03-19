<?php
/**
 * 
 */
require_once "models/product.php";
require_once "controllers/base_controller.php";

class ProductController extends BaseController
{
	public function __construct(){
		$this->folder = "product";
	}

	public function index(){
		//Tien hanh lay du lieu duoi model 'product'
		$data = ProductModel::getAllProduct();
		$this->render("all",$data);
	}

	public function detail(){
		$id = isset($_GET['id']) ? $_GET['id'] : "";

		$data = ProductModel::getProductByModem($id);
		$this->render("detail",$data);
	}

	public function search(){
		$searchVal = $_POST['txtSearch'];
		$data = ProductModel::searchByName($searchVal);
		$this->render("result",$data);
	}

}
?>











