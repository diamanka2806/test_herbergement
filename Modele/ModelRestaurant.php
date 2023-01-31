<?php
    require_once("Modele/Restaurant.php");
    class ModelRestaurant
    {
        public $connexion;

        public function __construct()
        {
            $serveur="localhost";
            $login="root";
            $password= "" ;
            $this->connexion= new PDO("mysql:host=$serveur;dbname=baseweb2",$login,$password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        public function getRestaurant($log)
        {
            $requetepre=$this->connexion->prepare("SELECT* FROM restaurant WHERE PASS_R=? ");
            $requetepre->execute(array($log));
            $donnee=$requetepre->fetch(); 
            $resultat=new Restaurant($donnee['LOGIN_R'],$donnee['PASS_R'],$donnee['ADRESSE_R'],$donnee['CONTACT_R'],$donnee['EMAIL_R'],$donnee['LOGO_R'],$donnee['NBRLIKE_R'],$donnee['NOM_R'],$donnee['TYPE_CUISINE_R']);
            return $resultat;
        }
        public function getListeRestaurant()
        {
            $requetepre=$this->connexion->prepare("SELECT * FROM restaurant");
            $requetepre->execute();
            $resultat=$requetepre->fetchAll(PDO::FETCH_ASSOC);
            $result=[] ;
            foreach($resultat as $donnee)
            {
                $result[]=new Restaurant($donnee['LOGIN_R'],$donnee['PASS_R'],$donnee['ADRESSE_R'],$donnee['CONTACT_R'],$donnee['EMAIL_R'],$donnee['LOGO_R'],$donnee['NBRLIKE_R'],$donnee['NOM_R'],$donnee['TYPE_CUISINE_R']);
            } 
            return $result;   
        }
        public function supprimerRestaurant($login)
        {
            $requetepre=$this->connexion->prepare("DELETE * FROM restaurant WHERE PASS_R=?");
            $requetepre->execute(array($login));    
        }
        public function ajouterRestaurant($login,$pass,$add,$contact,$email,$logo,$nblike,$nom,$typeCuisine)
        {
            $requetepre=$connexion->prepare("INSERT INTO restaurant VALUES(?,?,?,?,?,?,?,?,?)");
            $requetepre->execute(array($login,$pass,$add,$contact,$email,$logo,$nblike,$nom,$typeCuisine));    
        }

        public function recherherRestaurant($rech)
        {
            $requetepre=$this->connexion->prepare("SELECT * FROM restaurant WHERE NOM_R=?");
            $requetepre->execute(array($rech));  
            $result=[];
            foreach($result as $donnee)
            {
                $result[]=new Restaurant($donnee['LOGIN_R'],$donnee['PASS_R'],$donnee['ADRESSE_R'],$donnee['CONTACT_R'],$donnee['EMAIL_R'],$donnee['LOGO_R'],$donnee['NBRLIKE_R'],$donnee['NOM_R'],$donnee['TYPE_CUISINE_R']);
            }
        }
        public function getRestoParIdentifiant($log,$crit)
        {
            $result=[];
            switch($log)
            {
                case "login":
                    $requetNOM=$this->connexion->prepare("SELECT* FROM restaurant WHERE NOM_R=? ");
                    $requetNOM->execute(array($crit));
                    while ($donnee=$requetNOM->fetch())
                        {
                            $result[]=new Restaurant($donnee['LOGIN_R'],$donnee['PASS_R'],$donnee['ADRESSE_R'],$donnee['CONTACT_R'],$donnee['EMAIL_R'],$donnee['LOGO_R'],$donnee['NBRLIKE_R'],$donnee['NOM_R'],$donnee['TYPE_CUISINE_R']);
                        }
                    break;
                case "adresse":
                    $requetLieu=$this->connexion->prepare("SELECT* FROM RESTAURANT WHERE ADRESSE_R=? ");
                    $requetLieu->execute(array($crit));
                       while($donnee=$requetLieu->fetch())
                       {
                            $result[]=new Restaurant($donnee['LOGIN_R'],$donnee['PASS_R'],$donnee['ADRESSE_R'],$donnee['CONTACT_R'],$donnee['EMAIL_R'],$donnee['LOGO_R'],$donnee['NBRLIKE_R'],$donnee['NOM_R'],$donnee['TYPE_CUISINE_R']);
                       }
                    break;
                case "cuisine":
                    $requetLieu=$this->connexion->prepare("SELECT* FROM RESTAURANT WHERE TYPE_CUISINE_R=? ");
                    $requetLieu->execute(array($crit));
                       while($donnee=$requetLieu->fetch())
                       {
                            $result[]=new Restaurant($donnee['LOGIN_R'],$donnee['PASS_R'],$donnee['ADRESSE_R'],$donnee['CONTACT_R'],$donnee['EMAIL_R'],$donnee['LOGO_R'],$donnee['NBRLIKE_R'],$donnee['NOM_R'],$donnee['TYPE_CUISINE_R']);
                       }
                    break;
            }
           return $result; 
        } 
    }        
?>