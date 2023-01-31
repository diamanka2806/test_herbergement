<?php
session_start();
    $image=$_POST['image'];
    $text=$_POST['pub'];
    $date=date('d/m/y');
    $nbLike=0;
    $nbDislike=0;
    $serveur="localhost";
    $login="root";
    $password= "" ;
    $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
    $req=$connexion->prepare("INSERT into PUBLICATION(DATE_P,PASS_R,IMAGE_P,NBRLIKE_P,TEXTE_P,NBRDISLIKE_P) VALUES(?,?,?,?,?,?)");
    $req->execute(array($date,$_SESSION["pass"],$image,$nbLike,$text,$nbDislike));

    header("location:../index1.php?ouest=accueilResto&dansResto=publication");
?>