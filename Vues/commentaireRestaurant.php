<!DOCTYPE <html>
    <head>
        <title>Commentaires faite par les visiteurs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Vues/css/bootstrap.css" rel="stylesheet">
        <script src="Vues/js/bootstrap.min.js"></script>
        <script src="Vues/commentaireResaurant.js"></script>
        <link rel="stylesheet" href="Vues/commentaireRestaurant.css"> 
    </head>
    <body>
         
        <?php
            include 'gestionRestoBis.php';
            echo'<div class="container" style="margin-top: 30px;">'; 
            if($resultat)
            {
                foreach($resultat as $donnee)
                {               
                    echo' 
                    <div class="row" >
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-5"style="color:blue;"><img src="Vues/image/photo.jpg" alt="contact"  width="60px background-color:blue;">'. $donnee->getClient($donnee->getPass_c()).'</div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-7">'. $donnee->getText_t().' </div>
                            <div class="col-2"></div>
                        </div>   
                    <!-- <div class="col-2"></div>-->
                    </div>';
                }
            }
            else
            {
                echo '<div class="row justify-content-center">Aucun commentaire ajouté</div>';
            }  
        ?> 
       <!-- <footer style="margin-left: 75%;">1-3 sur 16  < ></footer>-->
    </body>
</html>