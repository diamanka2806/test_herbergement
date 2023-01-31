<!Doctype html>
<html>
    <head>
        <title>Modele Restaurant</title>
        <meta charset="UTF_8">
    </head>
    <body>
        <?php
            class Restaurant
            {
                private $login_r;     
                private $pass_r;      
                private $adresse_r ;     
                private $conatct_r;      
                private $email_r;       
                private $logo_r;      
                private $nblike_r;    
                private $nom_r;   
                private $type_cuisine_r;
                
               function  __construct($login,$pass,$add,$cont,$mail,$logo,$nblike,$nom,$type)
                {
                    $this->login_r=$login;
                    $this->pass_r=$pass;
                    $this->adresse_r=$add;
                    $this->conatct_r=$cont;
                    $this->email_r=$mail;
                    $this->logo_r=$logo;
                    $this->nblike_r=$nblike;
                    $this->nom_r=$nom;
                    $this->type_cuisine_r=$type;
                }
                public function getLogin()
                {
                    return $this->login_r;
                }
                public function getPass()
                {
                    return $this->pass_r;
                }
                public function getAdresse()
                {
                    return $this->adresse_r;
                }
                public function getNom()
                {
                    return $this->nom_r;
                }
                public function getTypeCuisine()
                {
                    return $this->type_cuisine_r;
                }
                public function getEmail()
                {
                    return $this->email_r;
                }
                public function getContact()
                {
                    return $this->conatct_r;
                }
                public function getLogo()
                {
                    return $this->logo_r;
                }
                public function getNbrLike()
                {
                    return $this->nblike_r;
                }
            }
        ?>
    </body>
</html>