<?php 
    session_start();
    $serveur="localhost";
    $login="root";
    $password= "" ;  
    $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);     
    $pass_r = $_SESSION['pass'];
    $pass_c = $_SESSION['client'];
    $text_t = $_GET['commente'];
    $mode=$_SESSION['est'];
    $date_p=date("d/m/y");
    $requetepre=$connexion->prepare("INSERT INTO commentaire(DATE_T,PASS_C,PASS_R,TEXT_T,MODE_T) VALUES(?,?,?,?,?)");
    $requetepre->execute(array ($date_p,$pass_c,$pass_r,$text_t,$mode));
   
    header("location:../index1.php?ouest=commentaire&est=$mode"); 
?>   