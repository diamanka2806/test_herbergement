<?php
    session_start();
    $serveur="localhost";
    $login="root";
    $password="";
    try
    {
        $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
        $log=$_POST['login'];
        $pass=$_POST['password'];
        $requete=$connexion->prepare("SELECT * FROM Client WHERE LOGIN_C=? and PASS_C=? ");
        $requete->execute(array($log,$pass));
        $total=$requete->fetch();
        if(($total['PASS_C']==$pass))
        {
            $_SESSION['client']=$pass;
            header("location:../index1.php?ouest=accueilClient");
        }
        else
        {
            header("Location:formulaire_de_connexions.html");
        }
            
    }
    catch(PDOExecption $e)
    {
        echo 'ERREUR'.$e->getMEsseage();
    }
?>