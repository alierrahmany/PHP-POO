
<?php

require_once('Personn.php'); // Inclure la classe abstraite Personne

// Définition de la classe Formateur, fille de Personne
class Formateur extends Personne{
    // Propriétés spécifiques à la classe Formateur
    protected $niveau;
    protected $salaireFixe;

    // Constructeur de la classe Formateur
    public function __construct($numero, $nom, $prenom, $heuresup, $salairehoraires, $niveau, $salaireFixe) {
        // Appeler le constructeur de la classe parente Personne
        parent::__construct($numero, $nom, $prenom, $heuresup, $salairehoraires);
        
        // Initialiser les propriétés spécifiques à la classe Formateur
        $this->niveau = $niveau;
        $this->salaireFixe = $salaireFixe;
    }

    // Méthodes magiques __get et __set pour accéder aux propriétés spécifiques
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

   // Méthode pour calculer le salaire total du formateur en fonction du niveau
public function calculerSalaire() {
    // Salaire de base
    $salaireTotal = $this->salairehoraires * $this->heuresup;

    switch ($this->niveau) {
        case "technicien specialise":
            $this->$salaireTotal = 120; 
        case "technicien":
            $this->  $salaireTotal = 90; 
            break;
        case "qualification":
            $this-> $salaireTotal = 60; 
              break;
        default:
            $salaireTotal = 40; 
    }

    return $salaireTotal;
}
}

// Test unitaire commenté
// $f1 = new Formateur(120,"badr",'koton',20,40,6000,"3eme Grade");
// echo $f1->SalaireFix;
