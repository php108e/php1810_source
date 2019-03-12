<?php
/**
 * Child class
 */
require_once "car.php";
class BMW extends Car
{
	//Tao ra cac thuoc tinh cua rieng no
	private $price;

	public function acceptBMW($_price){
		$this->accept("Black","X6");
		$this->price = $_price;
	}

	public function displayBMW(){
		$this->display();
		echo "<br>Gia: ".$this->price;
	}
}
?>