<?php
/**
 * 
 */
require_once "controllers/base_controller.php";

class PagesController extends BaseController
{
	public function __construct(){
		$this->folder = "pages";
	}

	public function error(){
		$this->render("error");
	}

	public function home(){
		
	}
}
?>