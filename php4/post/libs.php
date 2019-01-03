<?php
	function checkLogin($_user, $_pass, $_acc){
		$status = 0;
		foreach ($_acc as $key => $value) {
			if ($_user == $key && $_pass == $value){
				$status = 1; break;
			}else{
				$status = 0;
			}
		}
		
		if($status == 1)
			return true;
		else
			return false;
	}

?>