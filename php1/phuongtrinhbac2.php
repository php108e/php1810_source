<!DOCTYPE html>
<html>
<head>
	<title>Giải phương trình bậc 2</title>
</head>
<body>
	<?php
		$a = 1;
		$b = 3;
		$c = 1;
	?>

	Phương trình bậc 2 có dạng: 

	<?php
		echo $a."x<sup>2</sup> + ". $b. "x + ". $c. "<br>";

		//Tiến hành giải phương trình
		$delta = $b*$b - 4*$a*$c;
		if($delta>0){
			$x1 = (-$b + sqrt($delta))/2*$a;
			$x2 = (-$b - sqrt($delta))/2*$a;
			echo "Phuong trinh co 2 nghiem phan biet: x1 = ".$x1. "; x2 = ".$x2;
		}elseif ($delta==0) {
			echo "Phuong trinh co nghiem kep: x1 = x2 = ".(-$c/$a); 
		}else{
			echo "Phuong trinh vo nghiem";
		}

	?>

</body>
</html>