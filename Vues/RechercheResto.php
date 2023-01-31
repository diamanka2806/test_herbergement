<?php
    session_start();

    $recherche=$_GET["recherche"];
    //echo $recherche;
    if($_GET["recherche"])
    {
        $tab=explode(" ",$recherche);
        $serveur="localhost";
        $login="root";
        $password= "" ;
        $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
       for($i=0;$i<count($tab);$i++)
        {
                $_SESSION['recherche']="";
                $_SESSION['critere']=$tab[$i];
                $preparer=$connexion->prepare("SELECT* FROM RESTAURANT WHERE NOM_R=?");
                $preparer->execute(array($tab[$i]));
                $result=$preparer->fetch();
                $_SESSION["quelResto"]="login";
                if($result)
                {
                    header("location:../index1.php?ouest=accueil&quelResto=login");
                    break;
                }
                $preparer=$connexion->prepare("SELECT* FROM RESTAURANT WHERE ADRESSE_R=?");
                $preparer->execute(array($tab[$i]));
                $result=$preparer->fetch();
                $_SESSION["quelResto"]="adresse";
                if($result)
                {
                    header("location:../index1.php?ouest=accueil&quelResto=adresse");
                    break;
                }
                $preparer=$connexion->prepare("SELECT* FROM RESTAURANT WHERE TYPE_CUISINE_R=?");
                $preparer->execute(array($tab[$i]));
                $result=$preparer->fetch();
                $_SESSION["quelResto"]="cuisine";
                if($result)
                {
                    header("location:../index1.php?ouest=accueil&quelResto=cuisine");
                    break;
                }
        } 
        echo "<div style='font-weight:bolder;font-size:20px;'>Aucun resultat ne correspand a votre recherche</div>";
    }
?>
   