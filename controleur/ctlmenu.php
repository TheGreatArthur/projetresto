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

			case 'panier':

				$id=$_GET['id'];
				$lib=$_GET['lib'];
				$quant=$_GET['quantite'];


				$ligne= array('id'=>$id,'lib'=>$lib,'qte'=>$quant);
				$_SESSION['panier'][]=$ligne;
				
			
				
					

				 //appel à la vue
				 include 'vue/vuemenu/v_listepanier.php'; 
				 
				 break;

				case 'supprimer':

				 $id=$_GET['id'];
				 $result = Dbmenu::deletmenu($id);
				 $data = Dbmenu::getAllmenu();
				 include 'vue/vuemenu/v_listemenu.php';

				 break;
				


				 case 'suppanier':

				
					$data = Dbmenu::getAllmenu();
					include 'vue/vuemenu/v_listemenu.php';
   
					break;
		}

?>