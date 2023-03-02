<?php
    require_once('personne.php');
    class Eleve extends Personne{
        private $niveau;
        public static $effectif=0;

        public function __construct($nom, $prenom, $adresse, $niveau) {
            parent::__construct($nom, $prenom, $adresse);
            $this->niveau = $niveau;
            self::$effectif++;
        }

        public function getEtatCivil() {
            return $this->nom . ' ' . $this->prenom . ' ' . $this->adresse . ' est en ' . $this->niveau;
        }

        static public function getEffectif() {
            return self::$effectif;
        }


    }




?>