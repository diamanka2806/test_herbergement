<?php
    include("Modele/Plat.php");

    class ModelPlat
    {
        public $connexion;
        //connexion a la base

        public function  __construct()
        {
            $this->connexion=  new PDO("mysql:host=localhost;dbname=baseweb2","root","");
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }

        // methode pour avoir un plat a partir de son id

        public function getListPlat($IDRESTO)
        {
          $requete=$this->connexion->prepare("SELECT * FROM plat WHERE PASS_R=? ORDER BY NOM_M");
          $requete->execute(array($IDRESTO));
          $tousPlat=[];
          //$resultat=$requete->fetchAll(PDO::FETCH_ASSOC);
          while($result=$requete->fetch()){
            $tousPlat[]=new Plat($result['ID_M'],$result['HEURE_M'],$result['PASS_R'],$result['IMAGE_M'],$result['NOM_M'],$result['PRIX_M']);
          }

          return $tousPlat;
        }
        //une autre methode pour avoir tous les plat
        public function getPlat($id)
        {
            $requete=$this->connexion->prepare("SELECT * from plat where =?");
            $requete->execute(array($id));
            $result=$requete->fetch();
            return new Plat($result['ID_M'],$result['HEURE_M'],$result['PASS_R'],$result['IMAGE_M'],$result['NOM_M'],$result['PRIX_M']);
        }

        public function supprimerPlat($id)
        {
          $requete=$this->connexion->prepare("DELETE FROM plat where ID_M=?");
          $requete->execute(array($id));
        }

        public function ajouterPlat($HEURE_M, $ID_M,$PASS_R,$IMAGE_M,$NOM_M,$PRIX_M)
        {
          $requete=$this->connexion->prepare("INSERT INTO plat(HEURE_M,ID_M,PASS_R,IMAGE_M,NOM_M,PRIX_M) values (?,?,?,?,?,?) ");
          $requete->execute(array($HEURE_M,$ID_M,$PASS_R,$IMAGE_M,$NOM_M,$PRIX_M));
        }
    }
?>