<?php
require_once("Modele/ModelClient.php");
require_once("Modele/ModelRestaurant.php");
require_once("Modele/ModelPublication.php");
require_once("Modele/ModelCommentaire.php");
require_once("Modele/ModelPlat.php");
class Controleur
{
    public $Restaurant;
    public $Plat;
    public $Commentaire;
    public $Client;
    public $Publication;

//constructeur
    public function __construct()
    {
        $this->Restaurant=new ModelRestaurant();
        $this->Plat=new ModelPlat();
        $this->Commentaire=new ModelCommentaire();
        $this->Client=new ModelClient();
        $this->Publication=new ModelPublication();
    }

    // que faire(selon l'utilisateur)

    public function invoke()
    {
        if(!isset($_GET['ouest']))
            $vers='accueil';
        else
            $vers=$_GET['ouest'];
        switch($vers)
        {
            case 'accueil':
                if(!isset($_GET['quelResto']))
                {
                    $tousRestaurant=$this->Restaurant->getListeRestaurant();
                    include 'Vues/Page-Accueil.php';
                }
               else
               {
                    $log=$_SESSION['critere'];
                    $identifiant=$_SESSION["quelResto"];
                    $tousRestaurant=$this->Restaurant->getRestoParIdentifiant($identifiant,$log);
                    include 'Vues/Page-Accueil.php';
               }
               
               break;
            case 'interface':
                $log=$_SESSION['pass'];
                $Restaurant=$this->Restaurant->getRestaurant($log);
                $Publication=$this->Publication->getListePublication($log);
                include 'Vues/interface_restaurant.php';

                break;
            case 'commentaire':
                $_SESSION['est']=$_GET['est'];
                if(isset($_SESSION['client'])) {
                    $suiv=$_GET['est'];
                    switch($suiv) 
                    {
                        case 'restaurant':
                            $log=$_SESSION['pass'];
                            $Commentaire=$this->Commentaire->getCommentaire($log,$suiv);
                            $nbcom=$this->Commentaire->nombreCommentaire($log,$suiv);
                            include 'Vues/commentaire.php';
                            break;
                        case'publication':
                            $log=$_SESSION['pass'];
                            $Commentaire=$this->Commentaire->getCommentaire($log,$suiv);
                            $nbcom=$this->Commentaire->nombreCommentaire($log,$suiv);
                            include 'Vues/commentaire.php';
                            break;
                    }   
                } 
                else {
                    $suiv=$_GET['est'];
                    switch($suiv) 
                    {
                        case 'restaurant':
                            $log=$_SESSION['pass'];
                            $Commentaire=$this->Commentaire->getCommentaire($log,$suiv);
                            $nbcom=$this->Commentaire->nombreCommentaire($log,$suiv);
                            include'Vues/commentairebis.php';
                            break;
                        case'publication':
                            $log=$_SESSION['pass'];
                            $Publication=$this->Commentaire->getCommentaire($log,$suiv);
                            $nbcom=$this->Commentaire->nombreCommentaire($log,$suiv);
                            include'Vues/commentairebis.php';
                            break;
                    }
                }
                break; 
            case 'accueilResto'://gestionrestaurant
                $ID=$_SESSION["pass"];
                $localisation=$_GET["dansResto"];
                switch($localisation)
                {
                    case 'commentaire':
                        $resultat=$this->Commentaire->getListCommentaire($ID);
                        include 'Vues/commentaireRestaurant.php';
                        break;
                    case 'publication':
                        $pub=$this->Publication->getListePublication($ID);
                        include 'Vues/listePubResto.php';
                        break;
                    case 'publicationBis':
                        $pubResto=$_GET["dansPubResto"];
                        switch($pubResto)
                        {
                            case 'ajouter':
                                include 'Vues/listePubResto.php';
                                break;
                            case 'supprimer': 
                                $idpublication=$_GET["idPub"];
                                $this->Publication->supprimer_publication($idpublication);
                                $pub=$this->Publication->getListePublication($ID);
                                include 'Vues/listePubResto.php';
                                break;
                        }
                        break;
                    case 'modification':
                        $Restaurant=$this->Restaurant->getRestaurant($ID);
                        include 'Vues/modifierResto.php';
                        break;
                    case 'modificationBis':
                        include 'Vues/formModificationResto.php';
                        break;
                    case 'changerMenu':
                        $donnee=$this->Plat->getListPlat($ID);
                        include 'Vues/changer_menu.php';
                        break;
                    case 'changerMenuBis':
                        $idPlat=$_GET["dansMenuResto"];
                        switch($idPlat)
                        {
                            case 'supprimer':
                                $idp=$_GET['idp'];
                                $this->Plat->supprimerPlat($idp);
                                $donnee=$this->Plat->getListPlat($ID);
                                include 'Vues/changer_menu.php';
                                break;
                            case 'ajouter':
                                $Restaurant=$this->Restaurant->getRestaurant($ID);
                                include 'Vues/ajout_plat.php';
                                break;
                        }
                    break;      
                }
                break;
            case 'accueilClient':
                $pass=$_SESSION['client'];
                $Client=$this->Client->getClient($pass);
                include ('Vues/Profil_client.php');
                break;
            case 'modifierclient':
                $pass=$_SESSION['client'];
                $Client=$this->Client->getClient($pass);
                include ('Vues/modifier_informations.php');
                break;
          case 'menuDuJour':
                $log=$_SESSION['pass'];
                $menu=$this->Plat->getListPlat($log);
                $Restaurant=$this->Restaurant->getRestaurant($_SESSION['pass']);
                include ('Vues/menu_jour.php');
            break;
        }
    }
}
?>
