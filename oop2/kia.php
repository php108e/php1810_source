<?php
/**
 * Child class
 */
require_once "car.php";
class KIA extends Car
{
	private $style;

	//phuong thuc ghi de
	public function accept($_c, $_m){
		$this->color = $_c;
		$this->modem = $_m;
		$this->style = "Sport";
	}

	public function display(){
		echo "Color: ".$this->color;
		echo "<br>Modem: ". $this->modem;
		echo "<br>Style: ". $this->style;
	}
}
?>