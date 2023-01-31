<?php

    $serveur="localhost";
    $login="root";
    $password= "" ;
    $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
    //$connexion->setAttribute(PDO::)
    $nom=$_POST['nom'];
    $adresse=$_POST['adresse'];
    $cuisine=$_POST['type_cuisine'];
    $contact=$_POST['contact'];
    $mail=$_POST['email'];
    $login=$_POST['login'];
    $mdp=$_POST['password'];
    $logo=$_POST['logo'];
    $nblike=0;
    $requetepre=$connexion->prepare("INSERT INTO restaurant(LOGIN_R,PASS_R,ADRESSE_R,CONTACT_R,EMAIL_R,LOGO_R,NBRLIKE_R,NOM_R,TYPE_CUISINE_R) VALUES(?,?,?,?,?,?,?,?,?)");
    $requetepre->execute(array($login,$mdp,$adresse,$contact,$mail,$logo,$nblike,$nom,$cuisine));

    $_SESSION['ouest']='accueil';
    header("location:../index1.php?ouest=accueil");    

?>