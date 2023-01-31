<?php
     
    class Plat{
        public $heure_m ;
        public $id_m ;
        public $pass_r ;
        public $image_m ;
        public $nom_m ;
        public $prix_m ;

        public function __construct($id_m,$heure_m,$pass_r,$image_m,$nom_m,$prix_m)
        {
            $this->heure_m=$heure_m;
            $this->id_m=$id_m;
            $this->pass_r=$pass_r;
            $this->image_m=$image_m;
            $this->nom_m=$nom_m;
            $this->prix_m=$prix_m;
        }
        public function getId_m()
        {
            return $this->id_m;
        }
        public function getHeure_m()
        {
            return $this->heure_m;
        }
        public function getPass_r()
        {
            return $this->pass_r;
        }
        public function getImage_m()
        {
            return $this->image_m;
        }
        public function getNom_m()
        {
            return $this->nom_m;
        }
        public function getPrix_m()
        {
            return $this->prix_m;
        }
     }
?>