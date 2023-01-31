<Doctype html>
<html>
    <head>
        <title>Ajouter un plat</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>
    <body>
        <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-1"></div>
            <?php echo '<img class="col-1" src="'.$Restaurant->getLogo().'" alt="logo" style="max-width: 70px; border-radius: 100%;">';?>
            <h2 class="col-8" style="color:aliceblue; border: 1px solid black;border-bottom-left-radius: 40px;border-top-right-radius: 40px;background-color: rgb(59, 59, 175);text-align: center;">Ajout de Plat</h2>
        </div>
        </div>
        <div class="container" style="margin-top: 20px;">
            <form action="Vues/recup_plat.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="heure_m" >Heure de disponibilite</label>
                        <input type="text" name="heure_m" id="heure_p">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <label for="id_m" >Identifiant</label><br>
                        <input type="text" name="id_m" id="id_p"disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="pass_m" >Mot de passe</label><br>
                        <input type="text" name="pass_m" id="pass_p">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <label for="prix_m" >Prix</label><br>
                        <input type="" name="prix_m" id="prix_p">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom_m" >Nom</label><br>
                        <input type="text" name="nom_m" id="nom_p">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3">
                        <label for="image_m" >Photo</label><br>
                        <input type="file" alt="plat" src="C:\wamp\www\Projet_web2\thieb.png" name="image_m" id="image_p">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-6"></div>
                    <div class="col-3" >
                        <input type="submit" class="col-5 " name="Ajouter" value="Ajouter" style="background-color: rgb(59, 59, 175);border:0px; color:white;">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
    