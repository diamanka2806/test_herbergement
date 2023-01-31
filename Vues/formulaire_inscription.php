<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire D'inscription</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="formulaire_inscription.css">
        <script src="formulaire_inscription.js" type="text/javasript"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);border-bottom-left-radius: 40px;border-top-right-radius: 40px;margin-top: 20px;color:white">
                <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
            </div>
            <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
                <div class="row">
                    <div class="col-2"></div>
                                <p class="col-4">
                                    <label for="nom">NOM</label><br>
                                    <input class="input" type="text" name="nom" required> <br>
                                </p>
                                <p class="col-4">
                                    <label for="login">LOGIN</label><br>
                                    <input class="input" type="text" name="login" id="login"><br>
                                </p>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <p class="col-4">
                        <label for="prenom">PRENOM</label><br>
                        <input class="input" type="text" name="prenom" required><br>
                    </p>
                    <p class="col-4">
                        <label for="password">MOT DE PASSE</label><br>
                        <input class="input" type="password" name="password" id="passworde"><br>
                    </p>            
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <p class="col-4">
                        <label for="adresse">ADRESSE</label><br>
                        <input class="input" type="text" name="adresse"><br>
                    </p>
                    <p class="col-4">
                        <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                        <input class="input" type="password" name="confirm" id="confirm"><br>
                    </p>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4">
                        <div class="row">
                            <p>
                                <label for="tel">TELEPHONE</label><br>
                                <input class="input" type="numeric" name="tel" required><br>
                            </p>
                        </div>
                        <div class="row">
                            <p>
                                <label for="email">E-MAIL</label><br>
                                <input class="input" type="email" name="email"><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-4" style="margin-top: 20px;">
                                <p>
                                    <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                    <textarea type="text" name="plat" cols="30" rows="3"></textarea><br>
                                </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                        <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                        <div class="col-1"></div>
                        <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
                </div> 
            </form>
        </div>
    </body>
</html>