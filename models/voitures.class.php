<?php
class Voiture
{
private $id;
private $marque;
private $modele;
private $couleur;
private $nbporte;
private $clim;

public function __construct($id, $marque,$modele,$couleur,$nbporte,$clim,$connexion)
{
$this->id = $id;
$this->marque = $marque;
$this->modele = $modele;
$this->couleur = $couleur;
$this->nbporte = $nbporte;
$this->clim = $clim;
$this->connexion = $connexion;
}

public function add(){
	$this->connexion->exec("insert into voitures (marque, modele,couleur,nbporte,clim) values('".$this->marque."','".$this->modele."','".$this->couleur."','".$this->nbporte."','".$this->clim."')");
}
public function edit(){
	$this->connexion->exec("update voitures set marque='".$this->marque."', modele='".$this->modele."',couleur='".$this->couleur."',nbporte='".$this->nbporte."',clim='".$this->clim."'");
}
public function index(){
	$res=$this->connexion->query("select * from voitures")->fetchAll(PDO::FETCH_OBJ);
	return $res;
}
public function delete(){
	$this->connexion->excec("delete from voitures where id=".$this->id);
}

}
?>
