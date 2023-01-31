<!DOCTYPE <html>
    <head>
        <title>Commentaires faite par les visiteurs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.php" media="all" type="text/css"> 
    </head>
    <body>
        <div style="margin-left: 15%;margin-right: 15%; margin-top: 10px;">
        <p style="font-weight: bold;">
                <?php echo $nbcom;  ?> Commentaires
                <span style="margin-left: 70%;">trier par 
                    <select name="Ancien"><option> Ancien </option></select>
                </span>
            </p> <hr><br>
            <div class="container"> 
                <!-- une boucle pour tous les commentaires   -->
                <?php
                    if($Commentaire)
                    {
                        foreach($Commentaire as $C)
                        echo'<div class="row" >
                            <div class="row">
                                <div class="col-3"style="color:blue;"><img src="Vues/image/photo.jpg" alt="contact" width="60"/>'.$C->getClient($C->getPass_c()).'</div>
                            </div>
                            <div clas="row">
                                <div class="col-12">'.
                                    $C->getText_t()
                                .'</div>
                            </div>   
                            <div class="col-2"></div>
                        </div>';
                    }
                    else
                    {
                       echo' <div class="row">
                            <div class="col-4"></div>
                            <div class="col">Aucun commentaire!!</div>
                        </div>';
                    }
                ?>    
            </div>
        </div>
        <br>
        <footer style="margin-left: 75%;"><?php echo $nbcom.'sur'.$nbcom;?>< ></footer>
    </body>
</html>