<!DOCTYPE html>
<html>
    <head>
        <title>formulaire de demande</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="interface_restaurant.css">-->
        <link rel="stylesheet" href="Vues/css/bootstrap.css">
        <!--<script rel="text/javascrip" src="interface_restaurant.js"></script>-->
    </head>
    <body>
        <?php
            include 'gestionRestoBis.php';
           echo' <div class="container">';
                //$plat=Plat->get_Plat($_SESSION["resto"]);
            echo' <div class="container">
            <div class="row" style="margin-top: 10px; height: 100px;">';
            if($donnee)
            {
                foreach($donnee as $D)
                {
                    echo'<div class="col-2"></div>';
                    echo'<div class="col-8" style="font-size:16px;border-top: 1px solid black; text-align: center; margin-top: 10px;background-color: whitesmoke;">
                    <div class="row" style="color:rgb(105,105,190);">
                    <p class="col-2"></p>
                    <p class="col-3">'.$D->getNom_m().'</p>
                    <P class="col-3">'.$D->getPrix_m().'</P>
                    </div>
                    <div class="row" style="color:rgb(105,105,190);">
                    <p class="col2"></p>
                    <p class="col justify-content-start" > disponible: '. $D->getHeure_m().'</p>
                    </div>
                    </div>';
                // $Resto  restau qui contient le plat;
                    echo '<div class="row justify-content-center">
                    <div class="col-1"><a style="border: 1px solid black;color:white;background-color: rgb(59, 59, 175);font-size:16px;text-decoration:none;" href="index1.php?idp='.$D->getId_m().'&ouest=accueilResto&dansResto=changerMenuBis&dansMenuResto=supprimer">supprimer</a></div>
                    <div class="col-2"></div>
                    
                    </div>';
                }
            }
            else
            {
                echo '<div class="row justify-content-center">Aucun plat ajouté</div>';
            }
           
            echo'
            <div class="row" style="height: 50%;"></div>
            <div class="row">
            <div class="col-5"></div>
            <div > <a  class="col-2" style="height:30px;background-color: rgb(59, 59, 175);" href="index1.php?ouest=accueilResto&dansResto=changerMenuBis&dansMenuResto=ajouter"><button style="height:30px;border: 1px solid black;color:white;background-color: rgb(59, 59, 175);">Ajouter un plat</button></a></div>
            </div>
            
        </div>';
        ?>
    </body>
</html>
