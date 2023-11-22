<?php
class MySqlDb {
    private static $dsn = 'mysql:dbname=projetresto_reserve;host=mysql-projetresto.alwaysdata.net';
    private static $user = '336227';
    private static $pwd = 'admin@77000';
    private static $objPdoDb;

    private function __construct() {}

    public static function getPdoDb() {
        try {
            if (!self::$objPdoDb) {
                self::$objPdoDb = new PDO(self::$dsn, self::$user, self::$pwd);
            }
            return self::$objPdoDb;
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}
?>