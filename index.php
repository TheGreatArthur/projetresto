<?php
session_start();
include 'vue/entete.php';
if(isset($_SESSION['connect'])){
	if ($_SESSION['statut']=='user'){
		include 'vue/menu.php';	

	} else {
		include 'vue/menuadmin.php';	

	}
			
}
		if(isset($_GET['ctl']))
		{
			switch($_GET['ctl']){
								 
					case 'menu':
					 include 'controleur/ctlmenu.php';
					 break;
					 
					case 'connexion':
					 include 'controleur/ctlConnexion.php';
					 break;	
					 
					 case 'reservation':
						include 'controleur/ctlreservation.php';
						break;	
				}	
		}		
if(!isset($_SESSION['connect'])){
	include 'vue/vueConnexion/v_form_connexion.php';
}
include 'vue/pied.php';
?>        				 
         
