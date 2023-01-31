<?php
    session_start();
    $serveur="localhost";
    $login="root";
    $password="";
    try
    {
        $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
    //$connexion->setAttribute(PDO::)
        $log=$_POST['login'];
        $pass=$_POST['password'];
        $requete=$connexion->prepare("SELECT * FROM Restaurant WHERE LOGIN_R=? and PASS_R=? ");
        $requete->execute(array($log,$pass));
        $total=$requete->fetch();
        if($total['LOGIN_R']==$log)
        {
            $_SESSION['pass']=$pass;
            header("location:../index1.php?ouest=accueilResto&dansResto=publication");
        }
        else
        {
            header("Location:form_connectResto.html");
        }
    }
    catch(PDOExecption $e)
    {
        echo 'ERREUR'.$e->getMEsseage();
    }
?>