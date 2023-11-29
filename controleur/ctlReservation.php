<?php
// reservationController.php

require_once './model/DbReservation.php';

$action = $_GET['action'];

switch ($action) {
    case 'lister':
        // Afficher la liste des réservations
        $data = DbReservation::getAllReservations();
        include './vue/vuereservation/v_listReservation.php';
        break; 

    case 'add':
        
        break;

    case 'delete':
       break;

    default:
        
        break;
}
?>