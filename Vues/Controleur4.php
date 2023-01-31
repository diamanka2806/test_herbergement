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
        $vers=$_GET['ouest'];
        switch($vers)
        {
            case 'accueil':
                if(!isset($_SESSION['recherche']))
                {
                    $tousRestaurant=$this->Restaurant->getListeRestaurant();
                    include 'Vues/Page-Accueil.php';
                }
               else
               {

               }
               break;
            case 'interface':
                $log=$_SESSION['rest'];
                $Restaurant=$this->Restaurant->getRestaurant($log);
                $Publication=$this->Publication->getListePublication($log);
                include 'Vues/interface_restaurant.php';    
                break;
            case 'accueilResto'://meee
                $ID=$_SESSION["pass"];
                $localisation=$_GET["dansResto"];
                switch($localisation)
                {
                    case 'commentaire':
                        $Commentaire=$this->Commentaire->getListCommentaire($ID);
                        include 'Vues/commentaire.php';
                        break;
                    case 'publication':
                        $pub=$this->Publication->getListePublication($ID);
                        include 'Vues/listePubResto.php';
                    case 'publicationBis':
                        $idpublication=$_GET["idPub"];
                        $pubResto=$_GET["dansPubResto"];
                        switch($pubResto)
                        {
                            case 'ajouter':
                                include 'Vues/listePubResto.php';
                                break;
                            case 'supprimer':
                                $this->Publication->supprimer_restaurant($idpublication);
                                include 'Vues/listePubResto.php';
                                break;
                        }
                        break;
                    case 'modification':
                        include 'Vues/modifierResto.php';
                        break;
                    case 'modificationBis':
                        include 'Vues/formModificationResto.php';
                        break;
                    case 'changerMenu':
                        include 'Vues/changer_menu.php';
                        break;
                    case 'changerMenuBis':
                        $idPlat=$_GET["dansMenuResto"];
                        switch($idPlat)
                        {
                            case 'supprimer':
                                $this->Plat->supprimerPlat($idPlat);
                                include 'Vues/changer_menu.php';
                                break;
                            case 'ajouter':
                                include 'Vues/ajout_plat.php';
                                break;
                           
                        }

                        break;
                }
                case 'recherche':
                    $identifiant=$_SESSION["quelResto"];
                    $tousRestaurant=$this->Restaurant->getRestoParIdentifiant($identifiant);
                    include 'Vues/Page-Accueil.php';
                    break;
        }
            
    }
}
?>
