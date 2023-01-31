<!DOCTYPE html>
<html>
    <head>
        <title>Modifier info resto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Vues/css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrbuttonp.min.js"></script>
        <script src="Vues/modifierResto.js"></script>
        <link rel="stylesheet" href="Vues/modifier_resto.css"> 
    </head>
    <body>
            <?php
                include ('gestionRestoBis.php');
             ?>
            <div class="row" style="margin-top:20px;">
                    <div class="col-2"></div>
                    <div class="col-3">Login:<?php echo $Restaurant->getLogin() ?></div>
                    <a class="col-2" href="index1.php?aModifier=login&ouest=accueilResto&dansResto=modificationBis" onclick="modifierResto('login')">Modifier</a>
            </div>
            <div class="row"style="margin-top:20px;">>
                <div class="col-2"></div>
                <hr class="col-7">
                <div class="col"></div>
            </div>
            <div class="row"style="margin-top:20px;">>
                    <div class="col-2"></div>
                    <div class="col-3">Nom:<?php echo $Restaurant->getNom() ?></div>
                    <a class="col-2" href="index1.php?aModifier=nom&ouest=accueilResto&dansResto=modificationBis" onclick="return modifierResto('nom');">Modifier</a>
            </div>
            <div class="row"style="margin-top:20px;">>
                <div class="col-2"></div>
                <hr class="col-7">
                <div class="col"></div>
            </div>
            <div class="row"style="margin-top:20px;">>
                    <div class="col-2"></div>
                    <div class="col-3">Adresse:<?php echo $Restaurant->getAdresse() ?></div>
                    <a class="col-2" href="index1.php?aModifier=adresse&ouest=accueilResto&dansResto=modificationBis" onclick="return modifierResto('adresse');">Modifier</a>
            </div>
            <div class="row"style="margin-top:20px;">>
                <div class="col-2"></div>
                <hr class="col-7">
                <div class="col"></div>
            </div>
            <div class="row"style="margin-top:20px;">>
                    <div class="col-2"></div>
                    <div class="col-3">Type de cuisine:<?php echo $Restaurant->getTypeCuisine() ?></div>
                    <a class="col-3" href="index1.php?aModifier=cuisine&ouest=accueilResto&dansResto=modificationBis" onclick="return modifierResto('cuisine');">Modifier</a>
            </div>
            <div class="row"style="margin-top:20px;">>
                <div class="col-2"></div>
                <hr class="col-7">
                <div class="col"></div>
            </div>
            <div class="row"style="margin-top:20px;">>
                    <div class="col-2"></div>
                    <div class="col-3">Contact:<?php echo $Restaurant->getContact() ?></div>
                    <a class="col-3"href="index1.php?aModifier=contact&ouest=accueilResto&dansResto=modificationBis" onclick="return modifierResto('contact');">Modifier</a>
            </div>
            <div class="row"style="margin-top:20px;">>
                <div class="col-2"></div>
                <hr class="col-7">
                <div class="col"></div>
            </div>
            <div class="row"style="margin-top:20px;">>
                    <div class="col-2"></div>
                    <div class="col-3">Email:<?php echo $Restaurant->getEmail() ?></div>
                    <a class="col-3" href="index1.php?aModifier=mail&ouest=accueilResto&dansResto=modificationBis" onclick="return modifierResto('mail');">Modifier</a>
            </div>
            <div class="row"style="margin-top:20px;">>
                <div class="col-2"></div>
                <hr class="col-7">
                <div class="col"></div>
            </div>
            <div class="row"style="margin-top:20px;">>
                    <div class="col-2"></div>
                    <div class="col-3">Mot de passe:<?php echo $Restaurant->getPass() ?></div>
                    <a class="col-3"href="index1.php?aModifier=pass&ouest=accueilResto&dansResto=modificationBis" onclick="return modifierResto('pass');">Modifier</a>
            </div>
            <div class="row"style="margin-top:20px;">>
                <div class="col-2"></div>
                <hr class="col-7">
                <div class="col"></div>
            </div>
    </body>
</html> 