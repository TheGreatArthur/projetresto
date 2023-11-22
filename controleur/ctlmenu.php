<?php
include './model/Dbmenu.php';

$action =$_GET['action'];

switch($action){
		
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = DbEmploye::getUnmenu($id);
			 
			 //appel à la vue
			 include 'vue/vuemenu/v_ficheEmployes.php';
			 
			 break;
			 
			case 'lister':
			 //appel à la base de donnée le modele
				$data = DbEmploye::getAllmenu();
			 
			 //appel à la vue
			 include 'vue/vuemenu/v_listeEmployes.php';
			 
			 break;
			 
			 case 'supprimer':
				
				$id = $_GET['id'];
				//appel à la base de donnée le modele pour suppression 
				
				DbEmploye::deletemenu($id);
				
				//appel à la base de donnée le modele pour listage
				$data = DbEmploye::getAllmenu();
				
				//appel à la vue
				include 'vue/vuemenu/v_listeEmployes.php';
			
			break;
				
		}

?>