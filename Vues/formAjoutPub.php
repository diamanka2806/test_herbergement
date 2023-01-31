<!DOCTYPE html>
<html>
    <head>
        <title>publication</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="publication.css"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body >
        <div class="container">
            <form action="Vues/recpPubResto.php" method="post">
                <div class="row" style="height:20px;"></div>
                <div class="row">
                    <div class="col-2" ></div>
                    <div class="col-4" >
                        <textarea type="text" name="pub" placeholder="Ajouter Une Description" cols="60" rows="2" style="color:black;" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3" ></div>
                    <div class="col-3"><input type="file" name="image"></div>
                </div>  
          
                <div class="row">
                    <div class="col-5"></div>
                    <input type="submit" value="Ajouter" name="Ajouter"  style="background-color:rgb(105,105,190);color:white;width:100px;border:0px;"/>
                </div>
            </form>
        </div>
    </body>
</html>