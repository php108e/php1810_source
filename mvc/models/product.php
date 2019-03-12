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

		$sql = "SELECT * FROM products";
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
}
?>