<?php 
    session_start();
    $_SESSION["modifierClient"]=$_GET["modifier"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>formulaire du client</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="formulaire_inscription.css">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <script src="Vues/js/bootstrap.js"></script>
        <script rel="text/javascript" src="formulaire_inscription.js"></script>
    </head>
    <body>    
        <?php 
         $var=$_GET["modifier"];  
         if($var == 'nom') {
            echo '<div class="container"> 
            <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
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
                                    <input class="input" type="text" name="login" id="login" disabled="true"><br>
                                </p>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <p class="col-4">
                        <label for="prenom">PRENOM</label><br>
                        <input class="input" type="text" name="prenom" required disabled="true"><br>
                    </p>
                    <p class="col-4">
                        <label for="password">MOT DE PASSE</label><br>
                        <input class="input" type="password" name="password" id="passworde"disabled="true"><br>
                    </p>            
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <p class="col-4">
                        <label for="adresse">ADRESSE</label><br>
                        <input class="input" type="text" name="adresse" disabled="true"><br>
                    </p>
                    <p class="col-4">
                        <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                        <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                    </p>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4">
                        <div class="row">
                            <p>
                                <label for="tel">TELEPHONE</label><br>
                                <input class="input" type="numeric" name="tel" required disabled="true"><br>
                            </p>
                        </div>
                        <div class="row">
                            <p>
                                <label for="email">E-MAIL</label><br>
                                <input class="input" type="email" name="email" disabled="true"><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-4" style="margin-top: 20px;">
                                <p>
                                    <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                    <textarea type="text" name="plat" cols="30" rows="3" disabled="true"></textarea><br>
                                </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                        <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                        <div class="col-1"></div>
                        <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
                </div> 
            </form>
        </div>';
     }

     if($var =='prenom') 
     {
        echo '<div class="container">
        <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
            <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
        </div>
        <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
            <div class="row">
                <div class="col-2"></div>
                            <p class="col-4">
                                <label for="nom">NOM</label><br>
                                <input class="input" type="text" name="nom" required disabled="true"> <br>
                            </p>
                            <p class="col-4">
                                <label for="login">LOGIN</label><br>
                                <input class="input" type="text" name="login" id="login" disabled="true"><br>
                            </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="prenom">PRENOM</label><br>
                    <input class="input" type="text" name="prenom" required ><br>
                </p>
                <p class="col-4">
                    <label for="password">MOT DE PASSE</label><br>
                    <input class="input" type="password" name="password" id="passworde"disabled="true"><br>
                </p>            
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="adresse">ADRESSE</label><br>
                    <input class="input" type="text" name="adresse" disabled="true"><br>
                </p>
                <p class="col-4">
                    <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                    <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="row">
                        <p>
                            <label for="tel">TELEPHONE</label><br>
                            <input class="input" type="numeric" name="tel" required disabled="true"><br>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <label for="email">E-MAIL</label><br>
                            <input class="input" type="email" name="email" disabled="true"><br>
                        </p>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 20px;">
                            <p>
                                <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                <textarea type="text" name="plat" cols="30" rows="3" disabled="true"></textarea><br>
                            </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
            </div> 
        </form>
    </div>';
     }
     if($var=='login') {
        echo '<div class="container">
        <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
            <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
        </div>
        <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
            <div class="row">
                <div class="col-2"></div>
                            <p class="col-4">
                                <label for="nom">NOM</label><br>
                                <input class="input" type="text" name="nom" required disabled="true"> <br>
                            </p>
                            <p class="col-4">
                                <label for="login">LOGIN</label><br>
                                <input class="input" type="text" name="login" id="login" ><br>
                            </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="prenom">PRENOM</label><br>
                    <input class="input" type="text" name="prenom" required disabled="true" ><br>
                </p>
                <p class="col-4">
                    <label for="password">MOT DE PASSE</label><br>
                    <input class="input" type="password" name="password" id="passworde"disabled="true"><br>
                </p>            
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="adresse">ADRESSE</label><br>
                    <input class="input" type="text" name="adresse" disabled="true"><br>
                </p>
                <p class="col-4">
                    <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                    <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="row">
                        <p>
                            <label for="tel">TELEPHONE</label><br>
                            <input class="input" type="numeric" name="tel" required disabled="true"><br>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <label for="email">E-MAIL</label><br>
                            <input class="input" type="email" name="email" disabled="true"><br>
                        </p>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 20px;">
                            <p>
                                <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                <textarea type="text" name="plat" cols="30" rows="3" disabled="true"></textarea><br>
                            </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
            </div> 
        </form>
    </div>';
     }
     if($var == 'password') {
        echo '<div class="container">
        <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
            <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
        </div>
        <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
            <div class="row">
                <div class="col-2"></div>
                            <p class="col-4">
                                <label for="nom">NOM</label><br>
                                <input class="input" type="text" name="nom" required disabled="true"> <br>
                            </p>
                            <p class="col-4">
                                <label for="login">LOGIN</label><br>
                                <input class="input" type="text" name="login" id="login"disabled="true" ><br>
                            </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="prenom">PRENOM</label><br>
                    <input class="input" type="text" name="prenom" required disabled="true" ><br>
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
                    <input class="input" type="text" name="adresse" disabled="true"><br>
                </p>
                <p class="col-4">
                    <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                    <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="row">
                        <p>
                            <label for="tel">TELEPHONE</label><br>
                            <input class="input" type="numeric" name="tel" required disabled="true"><br>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <label for="email">E-MAIL</label><br>
                            <input class="input" type="email" name="email" disabled="true"><br>
                        </p>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 20px;">
                            <p>
                                <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                <textarea type="text" name="plat" cols="30" rows="3" disabled="true"></textarea><br>
                            </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
            </div> 
        </form>
    </div>' ;
     }
     if($var=='tel') {
        echo '<div class="container">
        <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
            <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
        </div>
        <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
            <div class="row">
                <div class="col-2"></div>
                            <p class="col-4">
                                <label for="nom">NOM</label><br>
                                <input class="input" type="text" name="nom" required disabled="true"> <br>
                            </p>
                            <p class="col-4">
                                <label for="login">LOGIN</label><br>
                                <input class="input" type="text" name="login" id="login"disabled="true" ><br>
                            </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="prenom">PRENOM</label><br>
                    <input class="input" type="text" name="prenom" required disabled="true" ><br>
                </p>
                <p class="col-4">
                    <label for="password">MOT DE PASSE</label><br>
                    <input class="input" type="password" name="password" id="passworde" disabled="true"><br>
                </p>            
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="adresse">ADRESSE</label><br>
                    <input class="input" type="text" name="adresse" disabled="true"><br>
                </p>
                <p class="col-4">
                    <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                    <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="row">
                        <p>
                            <label for="tel">TELEPHONE</label><br>
                            <input class="input" type="numeric" name="tel" required ><br>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <label for="email">E-MAIL</label><br>
                            <input class="input" type="email" name="email" disabled="true"><br>
                        </p>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 20px;">
                            <p>
                                <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                <textarea type="text" name="plat" cols="30" rows="3" disabled="true"></textarea><br>
                            </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
            </div> 
        </form>
    </div>' ;
     }
     if($var=='adresse') {
        echo '<div class="container">
        <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
            <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
        </div>
        <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
            <div class="row">
                <div class="col-2"></div>
                            <p class="col-4">
                                <label for="nom">NOM</label><br>
                                <input class="input" type="text" name="nom" required disabled="true"> <br>
                            </p>
                            <p class="col-4">
                                <label for="login">LOGIN</label><br>
                                <input class="input" type="text" name="login" id="login"disabled="true" ><br>
                            </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="prenom">PRENOM</label><br>
                    <input class="input" type="text" name="prenom" required disabled="true" ><br>
                </p>
                <p class="col-4">
                    <label for="password">MOT DE PASSE</label><br>
                    <input class="input" type="password" name="password" id="passworde" disabled="true"><br>
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
                    <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="row">
                        <p>
                            <label for="tel">TELEPHONE</label><br>
                            <input class="input" type="numeric" name="tel" required  disabled="true"><br>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <label for="email">E-MAIL</label><br>
                            <input class="input" type="email" name="email" disabled="true"><br>
                        </p>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 20px;">
                            <p>
                                <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                <textarea type="text" name="plat" cols="30" rows="3" disabled="true"></textarea><br>
                            </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
            </div> 
        </form>
    </div>' ;
     }
    if($var=='email'){
      
        echo '<div class="container">
        <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
            <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
        </div>
        <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
            <div class="row">
                <div class="col-2"></div>
                            <p class="col-4">
                                <label for="nom">NOM</label><br>
                                <input class="input" type="text" name="nom" required disabled="true"> <br>
                            </p>
                            <p class="col-4">
                                <label for="login">LOGIN</label><br>
                                <input class="input" type="text" name="login" id="login"disabled="true" ><br>
                            </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="prenom">PRENOM</label><br>
                    <input class="input" type="text" name="prenom" required disabled="true" ><br>
                </p>
                <p class="col-4">
                    <label for="password">MOT DE PASSE</label><br>
                    <input class="input" type="password" name="password" id="passworde" disabled="true"><br>
                </p>            
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="adresse">ADRESSE</label><br>
                    <input class="input" type="text" name="adresse"disabled="true"><br>
                </p>
                <p class="col-4">
                    <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                    <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="row">
                        <p>
                            <label for="tel">TELEPHONE</label><br>
                            <input class="input" type="numeric" name="tel" required  disabled="true"><br>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <label for="email">E-MAIL</label><br>
                            <input class="input" type="email" name="email" ><br>
                        </p>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 20px;">
                            <p>
                                <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                <textarea type="text" name="plat" cols="30" rows="3" disabled="true"></textarea><br>
                            </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
            </div> 
        </form>
    </div>' ;  
    }
    if($var=='plat') {
        
        echo '<div class="container">
        <div class="row justify-content-center" style="background-color: rgb(105, 105, 190);">
            <h2 class="col" style="text-align: center;">VEUILLEZ REMPLIR CE FORMULAIRE</h2>
        </div>
        <form class="row" action="insertion_client.php" method="POST"  name="form-ins"  style="margin-top: 20px;">
            <div class="row">
                <div class="col-2"></div>
                            <p class="col-4">
                                <label for="nom">NOM</label><br>
                                <input class="input" type="text" name="nom" required disabled="true"> <br>
                            </p>
                            <p class="col-4">
                                <label for="login">LOGIN</label><br>
                                <input class="input" type="text" name="login" id="login"disabled="true" ><br>
                            </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="prenom">PRENOM</label><br>
                    <input class="input" type="text" name="prenom" required disabled="true" ><br>
                </p>
                <p class="col-4">
                    <label for="password">MOT DE PASSE</label><br>
                    <input class="input" type="password" name="password" id="passworde" disabled="true"><br>
                </p>            
            </div>
            <div class="row">
                <div class="col-2"></div>
                <p class="col-4">
                    <label for="adresse">ADRESSE</label><br>
                    <input class="input" type="text" name="adresse"disabled="true"><br>
                </p>
                <p class="col-4">
                    <label for="confirm">CONFIRMER MOT DE PASSE</label><br>
                    <input class="input" type="password" name="confirm" id="confirm"disabled="true"><br>
                </p>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="row">
                        <p>
                            <label for="tel">TELEPHONE</label><br>
                            <input class="input" type="numeric" name="tel" required  disabled="true"><br>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <label for="email">E-MAIL</label><br>
                            <input class="input" type="email" name="email" disabled="true"><br>
                        </p>
                    </div>
                </div>
                <div class="col-4" style="margin-top: 20px;">
                            <p>
                                <label for="plat">TYPE DE CUISINE PREFERE</label><br>
                                <textarea type="text" name="plat" cols="30" rows="3" ></textarea><br>
                            </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-1"><input type="submit" name="envoyer" value="SOMETTRE" onclick="return authentification()" style="height: 40px; background-color: rgb(49, 172, 49);color: aliceblue; border: 0px;"></div>
                    <div class="col-1"></div>
                    <div class="col-1"><input type="reset" name="supprimer" value="EFFACER" style="height: 40px;background-color: rgb(238, 86, 86);color: aliceblue;border: 0px;"></div>
            </div> 
        </form>
    </div>' ;  
    }
     ?>
    </body>
</html>