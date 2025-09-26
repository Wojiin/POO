<?php
/*L'objet est la construction basée sur la classe (instance de la classe). Il contient les
    attributs de la classe mais spécifiée pour lui même.

La classe définie un modèle pour les objets lui appartenant,
    comme un plan de construction général et sans spécifications
    particulières pour ses attributs.*/
Class Voiture{          
    //Les attributs sont des variables qui décrivent l'objet
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    /*Le Constructeur est l'artisan de l'objet, il se base sur la classe et 
    initialise les attributs*/
    /*la méthode permet de mettre l'objet en action en utilisant des fonctions
    propres à l'objet  */  
    //La méthode magique "construct" initialise les attributs de l'objet
    public function __construct($marque, $modele, $nbPortes){
        $this->_marque = $marque;             
        $this->_modele = $modele;              
        $this->_nbPortes = $nbPortes;          
        $this->_vitesseActuelle = 0;
    }
    //Le Getter est une méthode publique dans une classe qui permet de lire la valeur d'un attribut privé ou protégé sans le modifier.
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
    //Le Setter est une méthode qui permet de modifier la valeur d'un attribut privé ou protégé. 
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
/*la méthode permet de mettre l'objet en action en utilisant des fonctions
    propres à l'objet  */    
    public function demarrer(){
        if ($this->_vitesseActuelle == 0){
            $this->_vitesseActuelle += 1;
        }
        else {
            return $this->_vitesseActuelle;
        }
    }
    public function accelerer($speed){
        if ($this->_vitesseActuelle > 0){
            $this->_vitesseActuelle += $speed;
            }
        else { return $this->_vitesseActuelle; 
        }
    }
    public function stopper(){
            if ($this->_vitesseActuelle == 0) {
        return $this->_vitesseActuelle;
    } else {
        return $this->_vitesseActuelle;
    }
}
/* Méthode "toString" reprend les attributs et les renvois
     sous forme de string*/
    public function __toString() {
        return "Marque: {$this->_marque} <br>
                Modèle: {$this->_modele} <br> 
                Nombre de portes: {$this->_nbPortes} <br> 
                Vitesse actuelle: {$this->_vitesseActuelle}";
    }
}
//Création de l'objet Voiture qui spécifie les attributs
$voiture1 = new Voiture("Peugeot","206",2);
$voiture2 = new Voiture("Peugeot","308",5);

/*L'Encapsulation permet de rendre plus ou moins accessibles les attributs et 
    les méthodes de l'objet notamment dans le but 
    d'en limiter les modifications qui le dénaturent enleur donnant un niveau d'accès, généralement par des méthodes publiques "getter" et "setter".
    Il y en a 3 :
        public : accessible partout
        private : accessible uniquement dans la classe
        protected : accessible dans la classe et ses sous-classes (héritage)*/





