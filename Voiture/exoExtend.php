<?php

Class Voiture {          
    //Propriétés 
    protected $_marque;
    protected $_modele;
    //Constructeur
    public function __construct($marque, $modele){
        $this->_marque = $marque;             
        $this->_modele = $modele;
    }
    //Getter 
    public function getMarque() {
        return $this->_marque;
    }
    public function getModele() {
        return $this->_modele;
    }
    //Setter 
    public function setMarque($marque) {
        $this->_marque = $marque;
    }   
    public function setModele($modele) {
        $this->_modele = $modele;
    }
    //ToString
    public function __toString() {
        return "{$this->getMarque()}{$this->getModele()}";
    }
    //Infos
    public function infosVehicules($v){
        echo "Infos véhicule $v <br>
              ******************* <br>
              Nom et modèle du véhicule : {$this->_marque} {$this->_modele} <br>";
    }
}
//Extend (La classe fille de Voiture, qui a ses propres propriétés et qui reprend ceux de la mère)
final Class VoitureElec extends Voiture {
    //Propriétés
    private $_autonomie; //Propriété propre à la fille
    //Constructeur
    public function __construct($marque, $modele, $autonomie){
        parent::__construct($marque, $modele);//Appel du constructeur de la mère 
        $this->_autonomie = $autonomie;
    }
    //Getter
    public function getAutonomie() {
        return $this->_autonomie;
    }
    //Setter
    public function setAutonomie() {
        $this->_autonomie = $autonomie;
    }
    //Infos de la fille en appelant la méthode de la mère
    public function infosVehicules($v){
        parent::infosVehicules($v);
        echo "Autonomie : {$this->_autonomie} <br>";
    }
    //ToString de la fille en appelant la méthode de la mère
    public function __toString() {
        return parent::__toString() .$this->_autonomie; 
    }
}
//Créations
$v1 = new Voiture("Peugeot","408");      
$v2 = new VoitureElec("Peugeot","308","I3");
//Tests
$v1-> infosVehicules(1);
echo "<br><br>";
$v2-> infosVehicules(2);
echo "<br><br>";
echo $v1;
echo "<br><br>";
echo $v2;