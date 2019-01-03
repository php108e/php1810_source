<?php
    function checklogin($_user, $_post, $_acc){
    	foreach ($_acc as $key => $value) {
    		if($_user == $key && $_pass == $value){
    			$status = 1; break;

    		}else{
    			status = 0;
    		}
    		# code...
    	}
    	if ($status == 1)
    		return true;
    	else
    		return false;

    }

?>