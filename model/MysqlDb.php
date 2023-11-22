<?php

class MySqlDb{
	private static $dsn = 'mysql:dbname=projetresto_reserve;host=mysql-projetresto.alwaysdata.net';
	private static $user = '336227';
	private static $pwd = 'admin@77000';
	
	private static $objPdoDb;
	
	//constructeur
	private function __construct(){}
	
	//méthode d'accès
	public static function getPdoDb(){
		if(!self::$objPdoDb){
			self::$objPdoDb = new PDO(self::$dsn,self::$user,self::$pwd);
		}
		return self::$objPdoDb;		
	}
}
?>
