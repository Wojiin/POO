<?php

Class Voiture{          
    //Attributs 
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
//Constructeur
    public function __construct($marque, $modele, $nbPortes,$vitesseActuelle){
        $this->_marque = $marque;             
        $this->_modele = $modele;              
        $this->_nbPortes = $nbPortes;          
        $this->_vitesseActuelle;
    }
    //Getter 
    public function getMarque() {
        return $this->_marque;
    }
    public function getModele() {
        return $this->_modele;
    }
    public function getNbPortes() {
        return $this->_nbPortes;
    }
    public function getVitesseActuelle() {
        return $this->_vitesseActuelle;
    }
    //Setter 
    public function setMarque($marque) {
    $this->_marque = $marque;
}   
    public function setModele($modele) {
    $this->_modele = $modele;
}   
    public function setNbPortes($nbPortes) {
    $this->_nbPortes = $nbPortes;
}   
    public function setVitesseActuelle($vitesseActuelle) {
    $this->_vitesseActuelle = $vitesseActuelle;
}   

//Méthodes   
//Démarrer
    public function demarrer(){
        if ($this->_vitesseActuelle == 0){
            $this->_vitesseActuelle = 1;
            return "Le véhicule {$this->_marque} {$this->_modele} démarre <br>";
        }
        else {
            return "Le véhicule $this->_marque $this->_modele a déjà démarré <br>";
        }
    }
//Accélérer
    public function accelerer($speed){
        if ($this->_vitesseActuelle > 0){
            $this->_vitesseActuelle = $speed;
            return " Le véhicule $this->_marque $this->_modele accélère de $this->_vitesseActuelle km/h <br>";
        }
        else { return " Le véhicule $this->_marque $this->_modele veut accélérer de $speed <br>
            Pour accélérer, il faut démarrer le véhicule $this->_marque $this->_modele ! <br>"; 
        }
    }
//Décélérer
        public function decelerer($speed){
        if ($speed < 0){
            $this->_vitesseActuelle = 0;
        return "Le véhicule $this->_marque $this->_modele est immobilisé $this->_vitesseActuelle";
    }
        if ($this->_vitesseActuelle > 0){
            $this->_vitesseActuelle -= $speed;
            return " Le véhicule $this->_marque $this->_modele décélère de $speed km/h <br>";
        }
    }
//Stopper
    public function stopper(){
            if ($this->_vitesseActuelle == 0) {
        return "Le véhicule $this->_marque $this->_modele est stoppé <br>";
    } 
    else {
        return "Pour stopper le véhicule, sa vitesse doit être à 0, mais elle est de $this->_vitesseActuelle km/h! <br>";
    }
}
    

//toString
    public function __toString() {
        return "Marque: {$this->_marque} <br>
                Modèle: {$this->_modele} <br>
                Nombre de portes: {$this->_nbPortes} <br> 
                Vitesse actuelle: {$this->_vitesseActuelle}";
    }
//infos
public function infosVehicules(){
    $infos= array($v1,$v2);
    foreach  ($infos as $items){
        echo "Infos véhicule [$items] <br>
              ******************* <br>
              Nom et modèle du véhicule : {$this->_marque}{$this->_modele} <br>
              Nombre de portes: {$this->_nbPortes} <br> 
              Sa vitesse actuelle est de : {$this->_vitesseActuelle} km/h <br>";
    }
}

}
//Créations
$v1 = new Voiture("Peugeot", "408", "5", "0");
$v2 = new Voiture("Peugeot","308","5", "0");
echo $v1-> demarrer();
echo $v1-> accelerer(50);
echo $v2-> demarrer();
echo $v2-> decelerer(1);
echo $v2-> stopper();
echo $v2-> accelerer(20);
$infos-> infosVehicules();

