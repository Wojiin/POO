<?php
/*L'objet est la construction basée sur la classe. Il contient les
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
/*la méthode permet de mettre l'objet en action en utilisant des fonctions
    propres à l'objet  */    
    public function demarrer(){
        $this->statut
    }
        public function accelerer(){
        $this->statut
    }
        public function stopper(){
        $this->statut
    }
        /* Méthode toString reprend les attributs et les renvois
            sous forme de string*/
    public function __toString() {
        return "Marque: {$this->$_marque}, 
                Modèle: {$this->$_modele}, 
                Nombre de portes: {$this->$_nbPortes}, 
                Vitesse actuelle: {$this->$_vitesseActuelle}";
    }
}

/*Le Constructeur est l'artisan de l'objet, il se base sur la classe et 
    initialise les attributs*/
    
Class Voiture{
       //La fonction magique initialise les attributs de l'objet
    public function __construct($marque, $modele, $nbPortes, $_vitesseActuelle){
        $this->_marque = $marque;             
        $this->_modele = $modele;              
        $this->_nbPortes = $nbPortes;          
        $this->_vitesseActuelle = $vitesseActuelle;
    }
}   

// Création de l'objet Voiture qui spécifie les attributs
$Voiture1 = new Voiture("Peugeot","206","2","0");
$Voiture2 = new Voiture("Peugeot","308","5","0");

/*L'Encapsulation permet de rendre plus ou moins accessibles les attributs et 
    les méthodes de l'objet notamment dans le but 
    d'en limiter les modifications qui le dénaturent enleur donnant un niveau d'accès.
    Il y en a 3 "public","private","protected"*/

