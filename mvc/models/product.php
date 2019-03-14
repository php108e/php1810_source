<?php
/**
 * 
 */
class ProductModel
{
	private $productId;
	private $productName;
	//......


	public static function getAllProduct(){
		$items = [];
		$db = DB::getConnection();

		$sql = "SELECT * FROM products LIMIT 0,4";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();
		if($count>0){
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
		}
		return $items;
	}

	public static function getProductByModem($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM products WHERE modem=:m";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(":m",$id);
		$stmt->execute();
		$count = $stmt->rowCount();
		if($count>0){
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}
	}


}
?>











