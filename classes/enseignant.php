<?php 
    require_once('personne.php');
    class Enseignant extends Personne{

        private $matiere;

        public function __construct($nom,$prenom,$adresse,$matiere){
            parent::__construct($nom, $prenom, $adresse);
            $this->matiere = $matiere;
        }
    
    public function getEtatCivil() {
        return $this->nom . ' ' . $this->prenom . ' ' . $this->adresse . ' enseigne ' . $this->matiere;
    }



    }

?>