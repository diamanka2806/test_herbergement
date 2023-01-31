<!DOCTYPE html>
<html>
    <head>
        <title>formulaire de demande</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Vues/css/bootstrap.css">
        <link rel="stylesheet" href="Vues/interface_restaurant.css">
        <script rel="text/javascrip" src="Vues/interface_restaurant.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <p id="entete" class="col" style="text-align: center; color:white;">Nom du platforme</p>
            </div>
        </div>
        <div class="container"  style="border: 1px solid black; border-top-left-radius: 30px; border-top-right-radius: 30px;" id="header">
            <div class="row">
                <img class="col-2" src="<?php echo $Restaurant->getLogo();?>" alt="logo"  id="logo">
                <!--a la base pour recuperer les informations relatives au restaurant-->
                <div id="info_resto" class="col-9 justify-content-center"  style="background-color: rgb(105,105,190);color:white;">
                        <div class="row">
                        <div class="col-6">
                        <?php echo $Restaurant->getNom();?><br><br><br>
                        <?php echo $Restaurant->getAdresse();?><br><br><br>       
                        <?php echo $Restaurant->getContact();?><br><br><br>       
                        </div>
                        <div class="col-6">
                        <?php echo $Restaurant->getEmail();?><br><br><br>     
                        Nombre De Like:<?php echo $Restaurant->getNbrLike();?><br><br><br>      
                        Type De Cuisine: <?php echo $Restaurant->getTypeCuisine();?><br><br><br>
                        </div>
                        </div>           
                </div>
            </div>
            <div class="row" id="limit" style="padding-top: 5px;  margin-left: 10px; margin: bottom 5px;">
                <a class="col-4" href="../index1.php?ouest=menuDuJour" style="text-decoration:none;color: white;margin-left: 10px;"><button style="width:100%;border-top-right-radius: 50px;border-top-left-radius: 50px;">menu du jour</button></a>
                <a class="col-4" href="../index1.php?ouest=commentaire&est=restaurant" style="text-decoration:none;color: white;margin-left: 10px;"><button style="width:100%;border-top-right-radius: 50px;border-top-left-radius: 50px;">commentaire</button></a>
                <a  class="col" href="Vues/augmenterlikerestaurant.php" style="text-decoration:none;color: white;margin-left:10px"><button style="width:100%; border-top-right-radius: 50px;border-top-left-radius: 50px;">aimer--<?php echo $Restaurant->getNbrLike();?></button></a>
            </div>
            <div class="row" style="background-color: black"><div class="col-md" style="height: 5px;"></div></div>
        </div>
        <div class="container" id="corp" style="border:1px solid black;" >
            <div class="container" style="border: 1px solid black; margin-top: 5px;">
             <?php     
                foreach($Publication as $P)
                {
                    $id=$P->getId();
                    echo '<div class="row" id="P"   style="margin-top: 5px;">
                    <p class="col-3" style="margin-top: 10px;">'.$P->getTexte().'<br></p>
                    <img src="'.$P->getImage().'" alt="pub" class="col-8"  id="imagepub" height="300">
                    </div>
                    <div class="row justify-content-end" style="margin-right: 80px; margin-left: 20px;">
                    <a class="col-3" href="Vues/augmenterlikepublication.php?id='.$id.'" style="text-decoration:none;color: white;"><button style =" border-top-right-radius: 50px;width:100%"><img src="Vues/image/like.png"alt="like" style="max-height:25px;width: 50px;"/>--'. $P->getNombreLike().'</button></a>
                    <a class="col-3" href="Vues/augmenterdislikepublication.php?id='.$id.'" style="text-decoration:none;color: white;"><button style =" border-top-right-radius: 50px; width:100%"><img src="Vues/image/dislike.jpg"alt="dislike" style="max-height:25px;width: 50px;"/>--'.$P->getNbrDislike().'</button></a>
                    <button class="col-3" onclick="verscommentaire()" style =" border-top-right-radius: 50px;">Commentaires</button>
                    </div>
                    <hr>';
                }
             ?>
            </div>
        </div>
    </body>
</html> 