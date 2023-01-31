<!DOCTYPE <html>
    <head>
        <title>Liste Des Publications</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="commentaire.js"></script>
        <link rel="stylesheet" href="commentaire.css"> 
    </head>
    <body>
        <?php
            include('gestionRestoBis.php');
            include('formAjoutPub.php');
           echo ' <div style="height:30px;"></div>';
            if($pub)
            {
                foreach($pub as $donnee )
                {
                    echo'<div class="container">                
                        <div class="row"style="margin-top:10px;">
                            <div class="col-2"></div>
                            <div class="col-5"style="color:blue;"><img src="'.$donnee->getImage().'" alt="ImagePlat" style=" width:480px ;height: 300px;background-color:blue;"/></div>
                            <div class="col-4">'.$donnee->getTexte().'</div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-2">publié le :'.$donnee->getDatePublication().'</div> 
                            <div class="col-3">nombre de like :'.$donnee->getNombreLike().'</div>
                            <a class="col-1" href="../index1.php?ouest=accueilResto&dansResto=publicationBis&dansPubResto=supprimer&idPub='.$donnee->getId().'" style="width:100px;height:30px; text-decoration:none">Supprimer</a>
                        </div>
                    </div>';
                }
            }  
            else
            {
                echo '<div class="row justify-content-center">Aucun plat ajouté</div>';
            }  
    ?>
               
       <!-- <footer style="margin-left: 75%;">1-3 sur 16  < ></footer>-->
    </body>
</html>