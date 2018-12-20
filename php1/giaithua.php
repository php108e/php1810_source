<?php
	$n = "a";
	echo "Gia tri cua n = ".$n. "<br>";

	if($n==0){
		echo "Voi n = $n thi khong co giai thua";
	}elseif ($n<0) {
		echo "Moi ban nhap lai gia tri cua n";
	}else{
		$kq = 1;
		for($i = 1; $i<=$n ; $i++){
			$kq = $kq * $i;
		}

		//Hien thi ket qua
		echo "Ket qua: n! = ".$kq;
	}
?>