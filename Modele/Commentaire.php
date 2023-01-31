<?php

    class Commentaire
    {
        public $date_t;
        public $id_t;
        public $pass_c; 
        public $pass_r ;
        public $text_t ;
        public $mode_t;

        public function __construct($id_t,$pass_c,$pass_r,$text_t,$mode_t)
        {
            $this->date=date_create("now");
            $this->id_t=$id_t;
            $this->pass_c=$pass_c;
            $this->pass_r=$pass_r;
            $this->text_t=$text_t;
            $this->mode_t=$mode_t;

            // la date il la gerer avec current date
        }
        public function getId_t()
        {
            return $this->id_t;
        }
        public function getPass_c()
        {
            return $this->pass_c;
        }
        public function getPass_r()
        {
            return $this->pass_r;
        }
        public function getDate_t()
        {
            return $this->date_t;
        }
        public function getText_t()
        {
            return $this->text_t;
        }

        public function getMode_t()
        {
            return $this->mode_t;
        }

        public function getClient($pass_c)
        {
            $connexion=  new PDO("mysql:host=localhost;dbname=baseweb2","root","");
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $req=$connexion->prepare("SELECT * from client where PASS_C=? ");
            $req->execute(array($pass_c));
            $result=$req->fetch();
            return $result['NOM_C'].' '.$result['PRENOM_C'];
        }

    }
?>