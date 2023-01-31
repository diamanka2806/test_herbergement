<?php
session_start();
    if(isset($_POST["Ajouter"]))
    {
        $heure=$_POST["heure_m"];
        $logine=$_SESSION['pass'];
        $photo=$_POST["image_m"];
        $nom=$_POST["nom_m"];
        $prix=$_POST["prix_m"];
        
        $serveur="localhost";
        $login="root";
        $password= "" ;
        $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);

        $requette=$connexion->prepare("INSERT INTO plat(HEURE_M,IMAGE_M,NOM_M,PASS_R,PRIX_M) VALUES(?,?,?,?,?)");
        $requette->execute(array($heure,$photo,$nom,$logine,$prix));

        header("location:../index1.php?ouest=accueilResto&dansResto=changerMenu");
    }
    else
    {
        header("location:ajout_plat.php");
    }
?>