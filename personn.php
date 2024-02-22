<?php

// Définition de la classe abstraite Personne
abstract class Personne {
    // Attributs
    protected $numero; 
    protected $nom; 
    protected $prenom; 
    protected $heuresup;
    protected $salairehoraires; 

    // Constructeur de la classe Personne
    public function __construct($numero, $nom, $prenom, $heuresup, $salairehoraires) {
        $this->numero = $numero;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->heuresup = $heuresup;
        $this->salairehoraires = $salairehoraires;
    }

     // Méthodes magiques __get et __set 
     public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

        public function __toString()
    {
        return $this->numero . '-' . $this->nom  . ' ' . $this->prenom;
    }


    // Méthodes abstraites
    abstract public function calculerSalaire(); // Méthode abstraite pour calculer le salaire
  
}
