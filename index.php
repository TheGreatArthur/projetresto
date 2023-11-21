<?php
session_start();
include 'vue/entete.php';
if(isset($_SESSION['connect'])){
		include 'vue/menu.php';	
}
		if(isset($_GET['ctl']))
		{
			switch($_GET['ctl']){
								 
					case 'employe':
					 include 'controleur/ctlEmploye.php';
					 break;
					 
					case 'connexion':
					 include 'controleur/ctlConnexion.php';
					 break;					 
				}	
		}		
if(!isset($_SESSION['connect'])){
	include 'vue/vueConnexion/v_form_connexion.php';
}
include 'vue/pied.php';
?>        				 
         
