<?php
    $_SESSION["aModifier"]=$_GET["aModifier"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>formulaire de demande</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="form_demande.css">
        <link rel="stylesheet" href="Vues/css/bootstrap.css"/>
        <script src="Vues/modifierResto.js"></script>
        <script src="Vues/js/bootstrap.js"></script>
        <script rel="text/javascript" src="formulaire_inscription.js"></script>
    </head>
    <body>
        <?php $var=$_GET["aModifier"];
        if($var=='login')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom"  disabled="true">
                    </div>
                   
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine" disabled="true">
                    </div>
                   
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail" disabled="true">
                    </div>
                   
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="password" id="password" id="" disabled="true">
                    </div>
                   
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo" disabled="true">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        }
        if($var=='pass')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom"  disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="pass" id="password" >
                    </div>
                    
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo" disabled="true">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        }
        if($var=='nom')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom">
                    </div>
                    
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="password" id="password" disabled >
                    </div>
                    
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo" disabled="true">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        }
        if($var=='logo')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom"  disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="password" id="password" disabled >
                    </div>
                    
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass" disable>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        }
        if($var=='cuisine')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom"  disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine">
                    </div>
                    
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="password" id="password" disabled >
                    </div>
                    
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo" disabled="true">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        }
        if($var=='contact')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom"  disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="password" id="password" disabled>
                    </div>
                    
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo" disabled="true">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        }   
        if($var=='mail')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom"  disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail">
                    </div>
                    
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="password" id="password" disabled>
                    </div>
                    
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo" disabled="true">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        }    
        if($var=='adresse')
        {
            echo'<div class="container">
            <form action="Vues/recupAfterModifier.php" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="nom">Nom du Restaurant:</label><br>
                        <input type="text" name="nom" id="nom"  disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="adresse">Adresse du Restaurant:</label><br>
                        <input type="text" name="adresse" id="adresse"  >
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="type_cuisine">Type de cuisine:</label><br>
                        <input type="text" name="type_cuisine" id="cuisine" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="contact">Contact du Restaurant:</label><br>
                        <input type="number" name="contact" id="contact"  disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Mail du Restaurant:</label><br>
                        <input type="email" name="email" id="mail" disabled="true">
                    </div>
                    
                    <div class="col-3">
                        <label for="login">Login:</label><br>
                        <input type="text" name="login" id="login" id="login" disabled="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Mot de passe:</label><br>
                        <input type="password" name="password" id="password" disabled>
                    </div>
                    
                    <div class="col-3">
                        <label for="confirm">Confirmer le mot de passe:</label><br>
                        <input type="password" name="confirm" id="confirm" id="pass" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <label for="logo">Logo du Restaurant:</label><br/>
                        <input type="file" name="logo" id="logo" id="logo" disabled="true">
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1"></div>
                    <div class="col-1">
                        <br/><input type="reset" value="Effacer" style="background-color: rgb(333, 37, 37);">
                    </div>
                    <div class="col-1">
                    <br/><input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(73, 303, 73);">
                    </div>
                </div>
            </form>
        </div> ';
        } 
        ?>      
    </body>
</html>