<?php
    include("Modele/Commentaire.php");

    class ModelCommentaire
    {
        public $connexion;
        //connexion a la base

        public function  __construct()
        {
            $this->connexion=  new PDO("mysql:host=localhost;dbname=baseweb2","root","");
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }

        public function getListCommentaire($pass)
        {
            $req=$this->connexion->prepare("SELECT * from commentaire where PASS_R=? order by DATE_T");
            $req->execute(array($pass));
            $touscom=[];
            while($result=$req->fetch()){
                $touscom[]=new Commentaire($result['ID_T'],$result['PASS_C'],$result['PASS_R'],$result['TEXT_T'],$result['MODE_T']);
            }

            return $touscom;
        }

        public function getCommentaire($id,$ser)
        {
            $req=$this->connexion->prepare("SELECT * from commentaire where PASS_R=? and MODE_T=? order by DATE_T");
            $req->execute(array($id,$ser));
            $touscom=[];
            while($result=$req->fetch()){
                $touscom[]=new Commentaire($result['ID_T'],$result['PASS_C'],$result['PASS_R'],$result['TEXT_T'],$result['MODE_T']);
            }
            return $touscom;
        }

        public function supprimerCommentaire($id,$ser)
        {
          $requete=$connexion->prepare("DELETE * FROM commentaire where PASS_R=? AND MODE_T=?");
          $requete->execute(array($id,$ser));
        }
        public function nombreCommentaire($id,$ser)
        {
            $req=$this->connexion->prepare("SELECT COUNT(*) from commentaire where PASS_R=? and MODE_T=?");
            $req->execute(array($id,$ser));
            $res=$req->fetchColumn();
            return $res;
        }
        public function ajouterCommentaire($id_t,$pass_c,$pass_r,$text_t,$mode)
        {
            $date_t=date("d/m/y");
            $requete=$connexion->prepare("INSERT INTO commentaire(ID_T,PASS_C,PASS_R,TEXT_T,MODE_T) values (?,?,?,?,?,?)");
            $requete-execute(array($date_t,$id_t,$pass_c,$pass_r,$text_t,$mode));
        } 
    }
?> 