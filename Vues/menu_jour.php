<!DOCTYPE html>
<html>
    <head>
        <title>formulaire de demande</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="interface_restaurant.css">-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--<script rel="text/javascrip" src="interface_restaurant.js"></script>-->
    </head>
    <body>
    
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <?php echo'<img class="col-1" src="'. $Restaurant->getLogo() .'" alt="logo" style="max-width: 100px; border-radius: 100%;">';?>
                <h2 class="col-10" style="color:aliceblue; border: 1px solid black;border-bottom-left-radius: 40px;border-top-right-radius: 40px;background-color: rgb(105, 105, 190);text-align: center;"><?php echo $Restaurant->getNom();?></h2>
            </div>
        </div>
        <?php 
        if($menu)
        {
             foreach($menu as $donnee){
                echo ' <!--le menu du restaurant-->
                <div class="container">
                    <div class="container">
                        <div class="row" style="margin-top: 10px; height: 100px;">
                            <div class="col-2"></div>
                            <div class="col-8" style="color:rgb(105,105,190);font-weight:bolder;border-top: 1px solid black; text-align: center; margin-top: 10px;background-color: whitesmoke;">
                                <div class="row" style="color:rgb(105,105,190);">

                                    <p class="col-2"></p>
                                    <p class="col-3">'.$donnee->getNom_m().'</p>
                                    <P class="col-3">'.$donnee->getPrix_m().' F</P>
                                </div>
                                <div class="row">
                                    <p class="col2"></p>
                                    <p class="col justify-content-start" > disponible le: '.$donnee->getHeure_m().'</p>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>';
            }
        }
        else{
            echo '<div class="row justify-content-center">
            Aucun  plat n\'est ajouté
            </div>';
        }
        ?>
    </body>
</html>
