<!DOCTYPE html>
<html>
    <head>
        <title>Mon profil</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="Vues/profil_client.css">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="profil col-12" style="color: aliceblue;"><h2>Mon profil</h2></header>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <a class="col-3" href="../index1.php?ouest=modifierclient">Modifier information</a>
                <div class="col-2"></div>
                <a class="col-3" href="Vues/deconnexionrestaurant.php">Deconnexion</a>
                </div>
            </div>
            <div class="container" style="margin-top: 30px;">
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Nom:</div>
               <div class="col-3"><?php echo $Client->getNom_c() ?></div> 
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Prenom:</div>
               <div class="col-3"><?php echo $Client->getPrenom_c() ?></div> 
            </div>
           
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Adresse:</div>
               <div class="col-3"><?php echo $Client->getAdresse_c() ?></div>
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Numero:</div>
               <div class="col-3"><?php echo $Client->getTelephone_c() ?></div>
            </div>
           
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">E-MAIL:</div>
               <div class="col-3"><?php echo $Client->getEmail_c() ?></div>
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Login:</div>
               <div class="col-3"><?php echo $Client->getLogin_c() ?></div>
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Mot de passe:</div>
               <div class="col-3"><?php echo $Client->getPass_c() ?></div>
            </div>
           
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Type de cuisine preferee:</div>
               <div class="col-3"><?php echo $Client->getType_cuisine_c() ?></div>
            </div>
        </div>

    </body>
</html>