<?php
// DbReservation.php

require_once "MysqlDb.php";

class DbReservation {
    
    public static function getAllReservations() {
        $sql = "SELECT * FROM reservations";
        $connect = MysqlDb::getPdoDb();
        $objResult = $connect->query($sql);
        $tabResult = $objResult->fetchAll(PDO::FETCH_ASSOC);
        return $tabResult;
    }
}
?>
