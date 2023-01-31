
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
        <!--<script src="https://kit.fontawesome.com/406699c4b9.js » crossorigin="anonyme »></script>-->
    </head>
    <body style="background-image:url(Vues/image/back2.jpg);background-size:cover;">
                <nav class="row" style="color:white;width:100%;background-color: rgb(105,105,190);height: 100px;">
                        <div class="col-2" style="color: #6eb85f;text-transform:uppercase;font-size: 35px;font-style: italic;font-weight:bold;">Tanal sa boula nekh</div>
                        <a href="../index1.php?ouest=accueil" class="col-1" active>Accueil</a>
                        <a href="Vues/geolocalisation.php" class="col-2">Localiser</a>
                        <a href="Vues/formulaire_de_connexions.html"  class="col-2">Connecter</a>
                        <a href="Vues/form_connectResto.html" class="col-2"> Mon Resto</a>
                        <form action="Vues/RechercheResto.php" method="GET" class="col-3">
                            <div class="row">
                                <input class="col-6" id="search" name="recherche"  type="text" placeholder="rechercher" style="border-top-right-radius: 5px;height: 50px;">
                                <input class="col-1" type="submit"  id="btn"  value="" style="border:0px;background-color: rgb(105,105,190);height: 40px;width: 55px; background-image:url(Vues/image/rech.png); background-position:25% 75%;background-repeat:no-repeat; background-size: 30px;">
                            </div>
                        </form>
                </nav>
            <div class="container"  style="margin-top: 5px; border-top-right-radius: 50px;border-bottom-left-radius: 50px;">
                <?php
                    if(!isset($_SESSION['recherche']))
                    {
                        if($tousRestaurant)
                        {
                            $R=$tousRestaurant;
                            $i=0;
                            $j=0;
                            while($i<count($R))
                            {
                                $j=0; 
                                echo '<div class="row">';
                                        while(($i<count($R))&&($j<4))
                                        {   
                                            echo '
                                                <a class="col-3 id="res" justify-content-center" href="Vues/accueilversinterface.php?login='.$R[$i]->getPass().'" style="background-color:white;border: 1px solid black;width:300px; height: 350px;color: black; font-size: 30;text-decoration:none; border-top-right-radius: 50px;border-bottom-left-radius: 50px;margin-top:20px;">
                                                    <div class="row justify-content-center">
                                                        <img class="col-3 " src="'.$R[$i]->getLogo().'" alt="logo" style="text-align:center;border-radius:100%;margin-top: 15px;height:150px;width:75%;"/>
                                                        <hr>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="row justify-content-center">
                                                            <div class="col-3" style="color:black;font-weight:bolder;">'.$R[$i]->getNom().'</div> 
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-3" style="color:black;font-weight:bolder;">'.$R[$i]->getAdresse().'</div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-3" style="color:black;font-weight:bolder;">Contact:'.$R[$i]->getContact().'</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="col-1"></div>' ;
                                            $j++;
                                            $i++;
                                        }
                                echo'</div>';   
                            }
                        }
                        else
                            echo "Aucun résultat ne correspond à votre recherche!"; 
                    }
                    else
                    {   
                        if($tousRestaurant)
                        {
                            $R=$tousRestaurant;
                            $i=0;
                            $j=0;
                            while($i<count($R))
                            {
                                $j=0; 
                                echo '<div class="row">';
                                        while(($i<count($R))&&($j<4))
                                        {   
                                            echo '<div class="col-1"></div>
                                                <a class="col-3 justify-content-center" href="Vues/accueilversinterface.php?login='.$R[$i]->getPass().'" style="background-color:white;border: 1px solid black;width:300px; height: 350px;color: black; font-size: 30;text-decoration:none; border-top-right-radius: 50px;border-bottom-left-radius: 50px;margin-top:20px;">
                                                    <div class="row justify-content-center">
                                                        <img class="col-3 " src="'.$R[$i]->getLogo().'" alt="logo" style="text-align:center;border-radius:100%;margin-top: 15px;height:150px;width:75%;"/>
                                                        <hr>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="row">
                                                            <div class="col-3" style="color:black;font-weight:bolder;">'.$R[$i]->getNom().'</div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-1" style="color:black;font-weight:bolder;">'.$R[$i]->getAdresse().'</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-1" style="color:black;font-weight:bolder;">Contact:'.$R[$i]->getContact().'</div>
                                                        </div>
                                                    </div>
                                                </a>';
                                            $j++;
                                            $i++;
                                        }
                                echo'</div>';   
                            }
                        }
                       else
                            echo "Aucun résultat ne correspond à votre recherche! fg";
                    }
                ?>
            </div>
        <footer class="row" style="margin-top: 80px;background-color:rgb(105,105,190);width:100%;position:absolute;">
            <div class="row" style="color:white;margin-top:20px">
                <div class="col-2"><img src="Vues/image/copyrigth.png" style="width:50px;"></div>
                <div class="col-4" style="font-weight:bold;"> COPYRIGTHTANALSABOULANEKH2023TOUTEREPRODUCTION INTERDITE</div>
            </div>
            <div class="row">
                <div class="col-8">
                    <a href="https://fr-fr.facebook.com/login/?next=https%3A%2F%2Ffr-fr.facebook.com%2FMaimouna"><img src="Vues/image/facebook.png" alt="Facebook" title="Lien vers Notre Page Facebook"style="width:70px; "></a>
                    <a  href="https://wa.me/221763569578"><img src="Vues/image/Whatsapp.png" alt="Whatsapp" title="Lien vers Notre Whatsapp" style="width:70px; "></a>
                    <a href="https://www.instagram.com/"><img src="Vues/image/twitter.png" alt="Instagram" title="Lien vers Notre Page Instagram"style="width:70px; "></a>
                </div>
            </div>
        </footer>
    </body>
</html>
