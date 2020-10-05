<?php
include "models/voitures.class.php";
include "includes/connexion.php";

//initialisation et recupération des attributs de l’objet voiture
isset($_REQUEST['id'])?$id=$_REQUEST['id']:$id="";
isset($_REQUEST['marque'])?$marque=$_REQUEST['marque']:$marque="";
isset($_REQUEST['modele'])?$modele=$_REQUEST['modele']:$modele="";
isset($_REQUEST['couleur'])?$couleur=$_REQUEST['couleur']:$couleur="";
isset($_REQUEST['nbporte'])?$nbporte=$_REQUEST['nbporte']:$nbporte="";
isset($_REQUEST['clim'])?$clim=$_REQUEST['clim']:$clim="";

isset($_REQUEST['action'])?$action=$_REQUEST['action']:$action="";

//Instanciation de l’objet voiture
$voiture=new Voiture($id, $marque,$modele,$couleur,$nbporte,$clim,$connexion);

Switch($action){
Case 'add1' : include "views/voitures/add.view.php";  Break;
Case 'add' : $voiture->add(); Break;

Case 'list1' : include "views/voitures/list.view.php";  Break;
Case 'list' : $voiture->index(); Break;
}
?>