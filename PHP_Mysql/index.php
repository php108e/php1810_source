<?php
	//buoc 1
	require "database.php";
	//buoc 2
	$sql = "SELECT * FROM products";
	//buoc 3
	$stmt = $db->prepare($sql);
	//buoc 4
	$stmt->execute();
	$count = $stmt->rowCount();
	
	if($count>0){
		//bieu dien du lieu
		echo "ten cac san pham: <br>";
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			echo $row['ProductName']."<br>";
	}
	}
?>