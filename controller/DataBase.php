<?php
Class Database { 
    public $user="root";
    public $pwd="";
    public $database="yesu_yo_nde";
    public $dataError=array();
    public $dbh;
    public function __construct(){

    } 
    public function connexion(){
        try{
            $dbh=new PDO('mysql:host=localhost;dbname='.$this->database,$this->user,$this->pwd);
        } catch(PDOException $e){
            $dataError['connexion']="Erreur de connection a la base de données";
            die('Erreur de connexion a la BD : '.$e->getMessage());
        }
        return $dbh;
    }
    public function prendre($champs,$table){
        try{
            $dbh=new PDO('mysql:host=localhost;dbname='.$this->database,$this->user,$this->pwd);
        } catch(PDOException $e){
            $dataError['connexion']="Erreur de connection a la base de données";
            die('Erreur de connexion a la BD : '.$e->getMessage());
        }
        $requete='SELECT '.$champs.' FROM '.$table.' where idMedia=Mediaid';
        $bdd=$this->connexion();
        $reponse = $bdd->query($requete);
        return $reponse;
    }
    public function prendre1($champs,$table){
        try{
            $dbh=new PDO('mysql:host=localhost;dbname='.$this->database,$this->user,$this->pwd);
        } catch(PDOException $e){
            $dataError['connexion']="Erreur de connection a la base de données";
            die('Erreur de connexion a la BD : '.$e->getMessage());
        }
        $requete='SELECT '.$champs.' FROM '.$table;
        $bdd=$this->connexion();
        $reponse = $bdd->query($requete);
        return $reponse;
    }
    public function prendre2($champs,$table,$lim){
        try{
            $dbh=new PDO('mysql:host=localhost;dbname='.$this->database,$this->user,$this->pwd);
        } catch(PDOException $e){
            $dataError['connexion']="Erreur de connection a la base de données";
            die('Erreur de connexion a la BD : '.$e->getMessage());
        }
        $requete='SELECT '.$champs.' FROM '.$table.' ORDER BY idGallerie DESC LIMIT '.$lim;
        $bdd=$this->connexion();
        $reponse = $bdd->query($requete);
        return $reponse;
    }
    public function prendre3($champs,$table,$lim){
        try{
            $dbh=new PDO('mysql:host=localhost;dbname='.$this->database,$this->user,$this->pwd);
        } catch(PDOException $e){
            $dataError['connexion']="Erreur de connection a la base de données";
            die('Erreur de connexion a la BD : '.$e->getMessage());
        }
        $requete='SELECT '.$champs.' FROM '.$table.' LIMIT '.$lim;
        $bdd=$this->connexion();
        $reponse = $bdd->query($requete);
        return $reponse;
    }
    public function prendre4($champs,$table,$lim){
        try{
            $dbh=new PDO('mysql:host=localhost;dbname='.$this->database,$this->user,$this->pwd);
        } catch(PDOException $e){
            $dataError['connexion']="Erreur de connection a la base de données";
            die('Erreur de connexion a la BD : '.$e->getMessage());
        }
        $requete='SELECT '.$champs.' FROM '.$table.' ORDER BY idIntro DESC LIMIT '.$lim;
        $bdd=$this->connexion();
        $reponse = $bdd->query($requete);
        return $reponse;
    }
    public function inserer($valeur,$table,$champs){
        $bdd=connection();
        $requete='INSERT INTO '.$table.'('.$champs.') VALUES('.$valeur.')';
        $bdd->exec($requete);
    }
}

?>