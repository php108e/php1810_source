<?php
/**
 * 
 */
class BaseController
{
	//Thuoc tinh chi dinh thu muc nam trong 'views' se duoc truy cap
	protected $folder;

	//Phuong thuc dung de dua du lieu toi file nam trong 'folder'
	//va hien thi du lieu cho nguoi dung
	protected function render($file, $data = array()){
		//Duong dan toi file se duoc truy cap
		$view_file = "views/". $this->folder. "/". $file. ".php";

		if(is_file($view_file)){
			extract($data);

			ob_start();
			require_once($view_file);
			$content = ob_get_clean();
			//Sau khi lay du lieu tu cache se bieu dien ra 'application.php'
			require_once("views/layout/application.php");

		}else{
			header("location:index.php/?controller=pages&action=error");
		}

	}



}
?>