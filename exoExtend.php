<?php

Class Voiture {          
    //Attributs 
    private $_marque;
    private $_modele;
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
        return "Marque: {$this->_marque} <br>
                Modèle: {$this->_modele} <br>";
    }
    //Infos
    public function infosVehicules($v){
        echo "Infos véhicule $v <br>
              ******************* <br>
              Nom et modèle du véhicule : {$this->_marque} {$this->_modele} <br>";
    }
}
//Extend
final Class VoitureElec extends Voiture {
    //Attributs
    private $_moteur;
    //Constructeur
    public function __construct($marque, $modele, $moteur){
        parent::__construct($marque, $modele);
        $this->_moteur = $moteur;
    }
    //Getter
    public function getMoteur() {
        return $this->_moteur;
    }
    //Infos
    public function infosVehicules($v){
        echo "Infos véhicule $v <br>
              ******************* <br>
              Nom et modèle du véhicule : {$this->getMarque()} {$this->getModele()} <br>
              Type de moteur : {$this->_moteur} <br>";
    }
    //ToString
    public function __toString() {
        return "Marque: {$this->getMarque()} <br>
                Modèle: {$this->getModele()} <br>
                Moteur: {$this->_moteur} <br>";
    }
}
//Créations
$v1 = new Voiture("Peugeot","408");      
$v2 = new VoitureElec("Peugeot","308","I3");
//Infos
$v1-> infosVehicules(1);
echo "<br><br>";
$v2-> infosVehicules(2);

