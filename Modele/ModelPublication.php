<?php
  require_once("Modele/Publication.php");
class ModelPublication
{
    public $connexion;
    public  function __construct()
    {
        $serveur="localhost";
        $login="root";
        $password= "" ;
        $this->connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
    }

    public function supprimer_publication($id)
    {
       $req=$this->connexion->prepare("DELETE from publication where ID_P=?");
       $req->execute(array($id));
    }

    public function ajouter_publication($ID_P,$IMAGE_P,$PASS_R,$TEXT_P)
    {
      $DATE_P=date('d/m/y');
      $NBRLIKE_P=0;
      $NBRDISLIKE_P=0;
      $req=$this->connexion->prepare("INSERT into publication(ID_P,IMAGE_P,DATE_P,NBRLIKE_P,NBRDISLIKE_P,,PASS_R,TEXTE_P) VALUES(?,?,?,?,?,?,?) ");
      $req->execute(array($ID_P,$IMAGE_P,$DATE_P,$NBRLIKE_P,$NBRDISLIKE_P,$PASS_R,$TEXT_P));
    }

    public function getPublication($id)
    {
      $req=$this->connexion->prepare("SELECT * from PUBLICARION where ID_P=?");
      $req->execute(array($id));
      $tab=$req->fetch();
      return new Publication($tab['ID_P'],$tab['IMAGE_P'],$tab['PASS_R'],$tab['TEXT_P'],$tab['NBRLIKE_P'],$tab['NBRDISLIKE_P']);
    }

    public function getListePublication($pass)
    {
      $req=$this->connexion->prepare("SELECT * from publication where PASS_R=? ");
      $req->execute(array($pass));
      $pub=[];
      while($tab=$req->fetch())
      {
        $pub[]=new Publication($tab['ID_P'],$tab['IMAGE_P'],$tab['PASS_R'],$tab['TEXTE_P'],$tab['NBRLIKE_P'],$tab['NBRDISLIKE_P']);
      }
      return $pub;
    }
}
?>