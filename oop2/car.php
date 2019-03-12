<?php
/**
 * Parent class
 */
class Car
{
	protected $color;
	protected $modem;

	protected function accept($_color, $_modem){
		$this->color = $_color;
		$this->modem = $_modem;
	}

	protected function display(){
		echo "Color: ".$this->color;
		echo "<br>Modem: ". $this->modem;
	}
}
?>