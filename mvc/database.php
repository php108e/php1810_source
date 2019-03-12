<?php
/**
 * 
 */
class DB
{
	private static $pdo = NULL;

	public static function getConnection(){
		if(!isset(self::$pdo)){
			try{
				self::$pdo = new PDO("mysql:host=localhost;dbname=PHP1018E;charset=utf8","root","");
			}catch(PDOException $ex){
				die($ex->getMessage());
			}
		}

		return self::$pdo;
	}
}
?>