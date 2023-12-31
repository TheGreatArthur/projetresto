<?php
// DbConnect.php
require_once "MysqlDb.php";

class DbConnect {
    public static function verifPassword($pwd) {
        $longueur = strlen($pwd);
        return ($longueur >= 5);
    }

    public static function verifLogin($email, $pwd) {
        $connect = MysqlDb::getPdoDb();
        $sql = "SELECT * FROM utilisateur WHERE email = :mail";
        $objPrepare = $connect->prepare($sql);
        $objPrepare->bindParam(':mail', $email);
        $objPrepare->execute();
        $result = $objPrepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>