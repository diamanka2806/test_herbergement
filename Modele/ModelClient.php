<?php 
        require_once('Modele/Client.php');

        class ModelClient
        {
            public $connexion; //Instance de PDO
            //this->connexion a la base de donnee
            public function __construct() {
                $this->connexion = new PDO("mysql:host=localhost;dbname=baseweb2","root","");
                $this->connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }
            //informations sur tous les clients
            public static function getListClient() {
                $req = $this->connexion->prepare("SELECT * FROM client ORDER BY NOM_C DESC");
                $req->execute();
                $clients = [];
                while($data = $req->fetch()) {
                    $clients[] = new Client($data['LOGIN_C'], $data['NOM_C'], $data['PASS_C'],$data['preNOM_C'], $data['ADRESSE_C'], $data['TELEPHONE_C'], $data['EMAIL_C'], $data['TYPE_CUISINE_C']);
                }
                return $clients;
            }
            //informations clients a partir de son login 
            public function getClient($LOGIN_C) {
                $req=$this->connexion->prepare("SELECT * FROM client WHERE PASS_C =?");
                $req->execute(array($LOGIN_C));
                $data=$req->fetch();
                $data = new Client($data['LOGIN_C'], $data['NOM_C'], $data['PASS_C'],$data['PRENOM_C'], $data['ADRESSE_C'], $data['TELEPHONE_C'], $data['EMAIL_C'], $data['TYPE_CUISINE_C']);
                return $data;
            }
            //ajouter un client 
            public function AjouterClient($LOGIN_C,$NOM_C,$PASS_C,$preNOM_C,$ADRESSE_C,$TELEPHONE_C,$EMAIL_C,$TYPE_CUISINE_C) {
                $requete = $this->connexion->prepare("INSERT INTO Client(LOGIN_C,NOM_C,PASS_C,preNOM_C,ADRESSE_C,TELEPHONE_C,EMAIL_C,TYPE_CUISINE_C) 
                 VALUES (?,?,?,?,?,?,?,?)");
                $requete->execute(array($LOGIN_C,$NOM_C,$PASS_C,$preNOM_C,$ADRESSE_C,$TELEPHONE_C,$EMAIL_C,$TYPE_CUISINE_C));
                
            }
            //supprimer un client 
            public function SupprimerClient($PASS_C) {
                $this->connexion->execute("DELETE * FROM Client WHERE PASS_C = $PASS_C");
                
            }

        }
''
?>