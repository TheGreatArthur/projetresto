<?php
include './model/Dbmenu.php';

$action =$_GET['action'];

switch($action){
		
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = Dbmenu::getUnmenu($id);
			 
			 //appel à la vue
			 include 'vue/vuemenu/v_listemenu.php';
			 
			 break;
			 case 'formmenu':
			
				
				 //appel à la vue
				 include 'vue/vuemenu/v_formajoutmenu.php';
				 
				 break;
			 
			case 'lister':
			 //appel à la base de donnée le modele
				$data = Dbmenu::getAllmenu();
			 
			 //appel à la vue
			 include 'vue/vuemenu/v_listemenu.php';
			 
			 break;
			 
			 case 'supprimer':
				
				$id = $_GET['id'];
				//appel à la base de donnée le modele pour suppression 
				
				Dbmenu::deletemenu($id);
				
				//appel à la base de donnée le modele pour listage
				$data = Dbmenu::getAllmenu();
				
				//appel à la vue
				include 'vue/vuemenu/v_listemenu.php';
			
			break;
				
		}

?>