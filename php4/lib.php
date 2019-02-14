<?php
	 function checklogin($_user, $_pass,$_acc){
	 	$status=0;
	 	foreach ($_acc as $key => $value) 
	 	{
	 		
	 		if($_user==$key&&$_pass==$value )
	 		{
	 			$status=1;
	 		}	

	 		if ($status==1) {
	 			return 1;
	 		}
	 		else{
	 			return 0;	
	 		}
	 	}
	 }
?>