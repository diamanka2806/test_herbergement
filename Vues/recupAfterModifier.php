<?php
    session_start();
    $var=$_SESSION["aModifier"];
    $serveur="localhost";
    $PASS="root";
    $password= "" ;
    $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$PASS,$password);
    switch($var)
    {
        case 'nom':
            if(isset($_POST["nom"]))
            {
                $requetepre=$connexion->prepare("UPDATE RESTAURANT SET NOM_R=? WHERE PASS_R=?");
                $requetepre->execute(array($_POST["nom"],$_SESSION["pass"]));
            }
            break;
        case 'adresse':
            if(isset($_POST["adresse"]))
            {
                $requetepre=$connexion->prepare("UPDATE RESTAURANT SET ADRESSE_R=? WHERE PASS_R=?");
                $requetepre->execute(array($_POST["adresse"],$_SESSION["pass"]));
            }
            break;
        case 'contact':
            if(isset($_POST["contact"]))
            {
                $requetepre=$connexion->prepare("UPDATE RESTAURANT SET CONTACT_R=? WHERE PASS_R=?");
                $requetepre->execute(array($_POST["contact"],$_SESSION["pass"]));
            } 
            break;
        case 'mail':
            if(isset($_POST["email"]))
            {
                $requetepre=$connexion->prepare("UPDATE RESTAURANT SET EMAIL_R=? WHERE PASS_R=?");
                $requetepre->execute(array($_POST["email"],$_SESSION["pass"]));
            }
            break;
        case 'logo':
            if(isset($_POST["logo"]))
            {
                $requetepre=$connexion->prepare("UPDATE RESTAURANT SET LOGO_R=? WHERE PASS_R=?");
                $requetepre->execute(array($_POST["logo"],$_SESSION["pass"]));
            }
            break;
        case 'pass':
            if(isset($_POST["pass"]))
            {
                $requetepre=$connexion->prepare("UPDATE RESTAURANT SET PASS_R=? WHERE PASS_R=?");
                $requetepre->execute(array($_POST["PASS"],$_SESSION["pass"]));
            } 
            break;
    }
    header ("location:../index1.php?ouest=accueilResto&dansResto=modification");
?>