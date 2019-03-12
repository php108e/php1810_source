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
		$this->render("all");
	}

	public function detail(){
		$id = isset($_GET['id']) ? $_GET['id'] : "";

		$data[] = $id;
		$this->render("detail",$data);
	}
	
}
?>