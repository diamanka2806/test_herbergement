<?php 
    $serveur = "localhost";
    $login = "root";
    $password ="";
    if(isset($_GET['valider'])) {
        try {
            $connexion = new PDO("mysql:host=$serveur;dbname=",$login, $password);
            echo 'bravo connexion reussie <br>';
            $connexion=setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $resultat;
            $loginR = $_GET['loginR'];
            $passwordR = $_GET['passwordR'];
            $prepare= $connexion->exec("SELECT loginR , passwordR FROM restaurant  where  loginR=$loginR and passwordR=$passwordR");  
            $result = $prepare;
            if(!empty($result))
            {
                header("Location:gestion_restaurant.html");
            }
            else {
                echo 'Erreur mot de passe ou login incorrect';
                echo '<a href="formInfoEtu.html">Essayez a nouveau</a>';
            }        
        }
        catch(PDOException $e) {
            echo ("echec requete  :" .$e->getMessage());
            exit();
        }
    }
?>