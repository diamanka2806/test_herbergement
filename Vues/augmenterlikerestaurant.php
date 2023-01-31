<?php 
    session_start();
    //if(isset($_SESSION['client']))
    if(isset($_SESSION['client']))
    {
        $serveur="localhost";
        $login="root";
        $password= "" ;  
        $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password); 
        $pass_r=$_SESSION['pass'];
        $req=$connexion->prepare("UPDATE restaurant set NBRLIKE_R = NBRLIKE_R+1 WHERE PASS_R=?");
        $req->execute(array($pass_r));
    }
    header("location:../index1.php?ouest=interface");
?>