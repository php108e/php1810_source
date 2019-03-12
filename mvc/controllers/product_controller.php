<?php
/**
 * 
 */
require_once "models/product.php";

class ProductController
{
	public function index(){
		echo "Day la trang chu";
		echo "<pre>";
		print_r(ProductModel::getAllProduct());
	}

	public function getProductById(){
		echo "Product by ID action";
	}
}
?>