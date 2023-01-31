<?php
                $serveur="localhost";
                $login="root";
                $password= "" ;
                $connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
                $nom_c = $_POST['nom'];
                $login_c = $_POST['login'];
                $prenom_c = $_POST['prenom'];
                $pass_c = $_POST['password'];
                $adresse_c = $_POST['adresse'];
                $telephone_c = $_POST['tel'];
                $email_c = $_POST['email'];
                $type_cuisine_c = $_POST['plat'];
        
               $requetepre=$connexion->prepare("INSERT INTO client(LOGIN_C,PASS_C,NOM_C,PRENOM_C,ADRESSE_C,TELEPHONE_C,EMAIL_C,TYPE_CUISINE_C) VALUES(?,?,?,?,?,?,?,?)");
               $requetepre->execute(array ($login_c,$pass_c,$nom_c,$prenom_c,$adresse_c,$telephone_c,$email_c,$type_cuisine_c));

               $_SESSION['ouest']='accueil';
               header("location:../index1.php?ouest=accueil");           
?>