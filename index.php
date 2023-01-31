<?php
session_start();
if(!isset($_SESSION['ouest']))
    $_SESSION['ouest']='accueil';


require_once("Controller/Controleur.php");
if(!isset($_SESSION['dejacreer']))
{
    $_SESSION['is']='web';//estce qu'on est passe par la page d'accueil
    $_SESSION['ouest']='accueil';//sur quel page somme nous
    $_SESSION['dejacreer']='oui';
    $Control=new Controleur();
    $Control->invoke(); 
}
else
{
    $Control=new Controleur();
    $Control->invoke(); 
}
?>