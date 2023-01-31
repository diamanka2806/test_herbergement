
<!Doctype html>
<html>
    <head>
        <title>Page Accueil</title>
        <meta charset="utf_8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="Vues/css/bootstrap.css"/>
        <link rel="stylesheet" href="Vues/accueil1.css"/>
        <script src="Vues/js/bootstrap.js"></script>
        <script src="Vues/Page-Accueil.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 15px;">
                <div class="col-1" id="menu">
                <img class="menu-button" onclick="toggleNavMenu()" src="Vues/image/menu1.png" alt="Menu" height="40px" width="85px">
                    <div class="nav-menu">
                        <?php $_SESSION["ouest"]="commentaire"?>
                        <a href="Vues/formulaire_de_connexions.html" style="color: aliceblue;">Se Connecter</a><hr>
                        <a href="Vues/formulaire_inscription.php"  style="color: aliceblue;">inscrire</a><hr>
                        <a href="Vues/form_connectResto.html"  style="color: aliceblue;">Mon Resto</a><hr>
                    </div>
                </div>
                <div class="col-8" id="platform" onclick="closeToggle()" style="border-top-right-radius: 20px; border-bottom-left-radius: 20px; color:aliceblue; font-size: 25;">Nom Plateform</div>
                <div class="col-3">
                    <form action="RechercheResto.php" method="GET">
                        <input name="recherche" id="search"  placeholder="Rechercher" onclick="closeToggle()" type="hidden" value="recherche" style="height: 40px;">
                        <input type="submit"  id="btn" onclick="closeToggle()" value=" " style="border-top-right-radius: 5px; background-color: rgb(105,105,190);height: 40px;width: 55px; background-image:url(Vues/recherche.png); background-position:left;background-repeat:no-repeat; background-size:contain">
                    </form>
                </div>
            </div>
               
            <div class="container" onclick="closeToggle()" style="border: 1px solid black; margin-top: 5px;">
                <div class="row" style="margin: top 5px;">
                    <div class="col-7">  
                    <?php
                    if(!isset($_SESSION['recherche']))
                    {
                        if(empty($tousRestaurant))
                            echo'Aucun resultat ne correspond a votre recherche';
                        foreach($tousRestaurant as $R)
                        {
                            echo '<div onclick="closeToggle()" class="row" style="margin-top: 2px;">
                            <a class="col-7" href="Vues/accueilversinterface.php?login='.$R->getLogin().'" style="background-color:rgb(105,105,190);border: 1px solid black; height: 80px;width:100%;color: black; font-size: 30;text-decoration:none">
                            <div class="row">
                                <div class="col-1"></div>
                                <img class="col-2" src="'.$R->getLogo().'" alt="logo" style="text-align:center;border-radius:100%;margin-top: 15px;height:60px;"/>
                        
                                <div class="col">
                                    <div class="row"  style="height: 10px;"></div>
                                    <div class="row">
                                        <div class="col" style="color:white;font-weight:10px;">'.$R->getNom().'</div>
                                        <div class="col" style="color:white;font-weight:10px;">Adresse:'.$R->getAdresse().'</div>
                                    </div>
                                    <div class="row justify-content-center" style="color:white;font-weight:10px;">Contact:'.$R->getContact().'</div>
                                 </div>
                                </div> 
                             </a>
                            </div>';
                       }
                    }
                    else
                    {
                        echo'SOFFFFFFFFFFF';
                    }
                    ?>
                    </div>
                    <div class="col-1" id="anim"></div>
                    <div class="col" id="defiler" style="height: 600px;border: 1px solid black; background-color: rgb(105,105,190);">
                        <marquee behavior="alternance" direction="right" scrollmount="2" style="font-size: large; background-color: rgb(105, 105, 190);color: aliceblue; font-weight:10px">BIENVENUE DANS CE SITE!</marquee>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
