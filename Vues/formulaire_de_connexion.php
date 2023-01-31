<?php
try{
    $connexion=new PDO("mysql:host=localhost;dbname=restaurant","root"," ");
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $log=$_POST['log'];
    $mdp=$_POST['pass'];
    $requete=$connexion->exec("SELECT passwordC from client where loginC=$log");
    $requete->exec();
    if($requete==null)
    {
        echo("Mot de passe incorrect!");
        echo "<a href=formulaire_de_connexion.html></a>"
    }
}
catch(PDOException $e)
{
    echo("erreur de connexion:".$e->getMessage());
}