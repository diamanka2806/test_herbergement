<?php
    class Client {
        public $login_c;
        public $nom_c;     
        public $pass_c ;                  
        public $prenom_c ;      
        public $adresse_c ;     
        public $telephone_c ;    
        public $email_c ;       
        public $type_cuisine_c ;
        
        public function __construct($login_c,$pass_c,$nom_c,$prenom_c,$adresse_c,$telephone_c,$email_c,$type_cuisine_c)
        {
            $this->login_c = $login_c;
            $this->nom_c = $nom_c;
            $this->pass_c = $pass_c;
            $this->prenom_c = $prenom_c;
            $this->adresse_c = $adresse_c;
            $this->telephone_c = $telephone_c;
            $this->email_c = $email_c;
            $this->type_cuisine_c = $type_cuisine_c;
        }
        public function getLogin_c() {
            return $this->login_c;
        }
        public function getNom_c() {
            return $this->nom_c;
        }
        public function getPrenom_c()
        {
            return $this->prenom_c;
        }
        public function getPass_c() {
            return $this->pass_c;
        }
        public function getAdresse_c() {
            return $this->adresse_c;
        }
        public function getTelephone_c() {
            return $this->telephone_c;
        }
        public function getEmail_c() {
            return $this->email_c;
        }
        public function getType_cuisine_c() {
            return $this->type_cuisine_c;
        }
    }
?>