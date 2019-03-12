<?php
class Product
{
	//Thuoc tinh
	private $pId;
	private $pName;
	private $pPrice;
	private $pQuantity;
	//.....

	//Phuong thuc khoi tao khong co tham so
	// public function __construct()
	// {
	// 	$this->pId = "M01";
	// 	$this->pName = "Mecedes C300";
	// 	$this->pPrice = 2500000000;
	// 	$this->pQuantity = 1;
	// }

	//Phuong thuc khoi tao co tham so
	public function __construct($_id, $_name, $_price, $_quantity)
	{
		$this->pId = $_id;
		$this->pName = $_name;
		$this->pPrice = $_price;
		$this->pQuantity = $_quantity;
	}

	//Cac hanh dong (phuong thuc) cua thuc the 'product'
	public function addProduct($_id, $_name, $_price, $_quantity)
	{
		$this->pId = $_id;
		$this->pName = $_name;
		$this->pPrice = $_price;
		$this->pQuantity = $_quantity;
	}

	public function getProduct()
	{
		echo "---- THONG TIN SAN PHAM ----<BR>";
		echo "Ma SP: ".$this->pId;
		echo "<br> Ten SP: ".$this->pName;
		echo "<br> Gia SP: ".$this->pPrice;
		echo "<br> So luong: ".$this->pQuantity; 
	}


}

?>