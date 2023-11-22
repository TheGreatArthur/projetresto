<?php
require_once "MysqlDb.php";

class Dbmenu{

	public static function getmenu(){
		$sql = "select * from menu";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	public static function getUnmenu($x){
		$sql = "select * from menu where id = $x";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetch(); // tableau
		return $tabResult;
		
		
	}
	
	public static function addmenu(){
		
	}
	public static function updatemenu(){
		
	}
	public static function deletemenu($id){
		$sql = "delete from menu where id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}
		
}

?>