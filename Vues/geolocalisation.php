<?php
  $serveur="localhost";
       $login="root";
       $password="";
        $connexion = new PDO("mysql:host=$serveur;dbname=baseweb2;",$login, $password);
        $req=$connexion->prepare("SELECT ADRESSE_R,NOM_R from restaurant");
        $req->execute();
        $res=$req->fetchAll();
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 100%;
        width: 100%;
      }
    </style>
     <script async defer
      src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap">
    </script>
  </head>
  <body>
    <h3>Carte de localisation des restaurants</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: { lat:16.29, lng:-16.01 }
        });
        var i=0;
        var restaurants = [
          { name: "Vicky", lat: 16.2, lng: -16.023 },
          { name: "Welly", lat:16.002, lng: -16.1 },
          { name: "Tangore cafe", lat:16.3, lng: -16.2 },
          { name: "Omzo", lat:16.154, lng: -16.32 }
          
        ];
        for (var i = 0; i < restaurants.length; i++) {
          var restaurant = restaurants[i];
          var marker = new google.maps.Marker({
            position: { lat: restaurant.lat, lng: restaurant.lng },
            map: map,
            title: restaurant.name
          });
        }
      
    }
</script> 
  </body>
</html>

