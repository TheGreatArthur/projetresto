<?php
// Dbmenu.php
require_once "MysqlDb.php";

class Dbmenu {
    public static function getAllmenu() {
        $sql = "SELECT * FROM menu";
        $connect = MysqlDb::getPdoDb();
        $objResult = $connect->query($sql);
        $tabResult = $objResult->fetchAll(PDO::FETCH_ASSOC);
        return $tabResult;
    }

    public static function getUnmenu($id) {
        $sql = "SELECT * FROM menu WHERE id = :id";
        $connect = MysqlDb::getPdoDb();
        $objResult = $connect->prepare($sql);
        $objResult->bindParam(':id', $id);
        $objResult->execute();
        $tabResult = $objResult->fetch(PDO::FETCH_ASSOC);
        return $tabResult;
    }

    public static function deletemenu($id) {
        $sql = "DELETE FROM menu WHERE id_menu = :x";
        $connect = MysqlDb::getPdoDb();
        $objResult = $connect->prepare($sql);
        $objResult->bindParam(':x', $id);
        $objResult->execute();
    }
    public static function insertMenu($nom_menu, $qte, $lien){
		$sql = "INSERT INTO menu(id_menu, nom_menu,qte_dispo,image) VALUES (NULL, '$nom_menu', $qte,'$lien');";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}

    public static function updatemenu($id,$qte) {
        $sql = "UPDATE menu SET qte_dispo = :x WHERE menu.id_menu = :y;";
        $connect = MysqlDb::getPdoDb();
        $objResult = $connect->prepare($sql);
        $objResult->bindParam(':y', $id);
        $objResult->bindParam(':x', $qte);
        $objResult->execute();
    }
    
}
?>