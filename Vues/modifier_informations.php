<!DOCTYPE html>
   <html>
      <head>
         <title>Modification_information_client</title>
         <meta charset="utf-8">
         <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="modifier_informations.css">
      </head>
      <body >
         <div class="container" style="margin-top:10px;">
            <div class="row" style="border-top-left-radius:20px;border-bottom-right-radius:20px; background-color: rgb(105,105,190);">
                <h3 class="col-12"  style="text-align: center;color:white;">Modification vos informations</h3>
            </div>
         </div>
         <div class="container" style="margin-top: 20px;">
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Nom:</div>
               <div class="col-3"><?php echo $Client->getNom_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=nom" class="col-2" name="modifier">modifier</a> 
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Prenom:</div>
               <div class="col-3"><?php echo $Client->getPrenom_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=prenom" class="col-2" name="modifier">modifier</a> 
            </div>
           
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Adresse:</div>
               <div class="col-3"><?php echo $Client->getAdresse_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=adresse" class="col-2" name="modifier">modifier</a> 
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Numero:</div>
               <div class="col-3"><?php echo $Client->getTelephone_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=tel" class="col-2" name="modifier">modifier</a> 
            </div>
           
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">E-MAIL:</div>
               <div class="col-3"><?php echo $Client->getEmail_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=email" class="col-2" name="modifier">modifier</a> 
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Login:</div>
               <div class="col-3"><?php echo $Client->getLogin_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=login" class="col-2">modifier</a> 
            </div>
            
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Mot de passe:</div>
               <div class="col-3"><?php echo $Client->getPass_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=password" class="col-2" name="modifier">modifier</a> 
            </div>
           
            <hr></hr>
            <div class="row">
               <div class="col-1"></div>
               <div class="col-2">Type de cuisine preferee:</div>
               <div class="col-3"><?php echo $Client->getType_cuisine_c() ?></div>
               <a href="Vues/modifierInfoclient.php?modifier=plat" class="col-2" name="modifier">modifier</a> 
            </div>
         </div>
      </body>
   </html>

           