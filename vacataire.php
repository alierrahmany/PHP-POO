<?php

require_once('Personn.php'); // Inclure la classe Personne

// Définition de la classe Vacataire, fille de Personne
class Vacataire extends Personne {
   // Propriété spécifique à la classe Vacataire
    protected $diplome;

    // Constructeur de la classe Vacataire
    public function __construct($numero, $nom, $prenom, $heuresup, $salairehoraires, $diplome) {

        parent::__construct($numero, $nom, $prenom, $heuresup, $salairehoraires);
        
        $this->diplome = $diplome;
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

    // Méthode pour calculer le salaire total du vacataire en fonction du diplôme
    public function calculerSalaire() {

        $salaireTotal = $this->salairehoraires * $this->heuresup;

        switch ($this->diplome) {
            case "1er garde":
                $this-> $salaireTotal = 140; 
                break;
            case "2eme garde":
                $this-> $salaireTotal = 100; 
                break;
            case "3eme garde":
                $this-> $salaireTotal = 80; 
                break;
            default:
                $salaireTotal = 60; 
        }

        return $salaireTotal;
    }
 }


 // Test unitaire
// $p1 = new Vacataire(120,"mohammed",'alhilali',10,30,"3eme grade");
// echo $p1->calcSalaire();
