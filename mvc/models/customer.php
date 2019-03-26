<?
class CustomerModel
{
	public static function checkLogin($email, $pass){
		$db = DB::getConnection();
		$sql = "SELECT * FROM customers WHERE Email=:e AND Password=:p";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(":e",$email);
		$stmt->bindParam(":p",$pass);
		$stmt->execute();
		$count = $stmt->rowCount();
		if($count>0){
			return true;
		}else{
			return false;
		}
	}

}