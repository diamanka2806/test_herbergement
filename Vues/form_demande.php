<!DOCTYPE html>
<html>
    <head>
        <title>formulaire de demande</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="form_demande.css">
        <script rel="text/javascrip" src="formulaire_inscription.js"></script>
    </head>
    <body>
        <form action="recup_restau.php" method="post">
            <h2 style="color: black;" >Veillez remplir le formulaire suivant pour la demande.</h2>
            <ul>
                <li>
                    <p>
                        <p>
                            <label for="nom">Nom du Restaurant:</label><br>
                            <input type="text" name="nom" class="input" required>
                        </p>
                        <p>
                            <label for="adresse">Adresse du Restaurant:</label><br>
                            <input type="text" name="adresse" class="input" required>
                        </p>
                        <p>
                            <label for="type_cuisine">Type de cuisine:</label><br>
                            <input type="text" name="type_cuisine" class="input">
                        </p>
                        <p>
                            <label for="contact">Contact du Restaurant:</label><br>
                            <input type="number" name="contact" class="input" required>
                        </p>
                    </p>
                </li>
                <li>
                    <p>
                        <p>
                            <label for="email">Mail du Restaurant:</label><br>
                            <input type="email" name="email" class="input">
                        </p>
                        <p>
                            <label for="login">Login:</label><br>
                            <input type="text" name="login" id="login" class="input" required>
                        </p>
                        <p>
                            <label for="password">Mot de passe:</label><br>
                            <input type="password" name="password" id="password" class="input">
                        </p>
                        <p>
                            <label for="confirm">Confirmer le mot de passe:</label><br>
                            <input type="password" name="confirm" id="confirm" class="input">
                        </p>
                    </p>
                </li>
            </ul>
            <p>
                <label for="logo">Logo du Restaurant:</label><br />
                <input type="file" name="logo" id="logo" class="input"/>
            </p>
            <p id="connect">
                <input type="reset" value="Effacer" style="background-color: rgb(223, 47, 47);">
                <input type="submit" value="Envoyer" onclick="return authentification()" style="background-color: rgb(72, 204, 72);">
            </p>
        </form>
    </body>
</html>