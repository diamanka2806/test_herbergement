<?php
 session_start();
 //if(isset($_SESSION['client']))
 if(isset($_SESSION['client']))
 {
     $serveur="localhost";
     $login="root";
     $password="" ;  
     $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password); 
     $pass_p=$_GET['id'];
     $req=$connexion->prepare("UPDATE publication set NBRDISLIKE_P = NBRDISLIKE_P+1 WHERE ID_P=?");
     $req->execute(array($pass_p));
 }
 header("location:../index1.php?ouest=interface");
