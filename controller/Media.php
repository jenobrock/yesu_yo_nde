<?php
include('Database.php');
class Media{
    public $donnee;
    
    public function __construct($champs,$table){
        $this->data1= new Database();
        $this->reponse=$this->data1->prendre($champs,$table);
        $this->donnee=$this->reponse->fetchAll();
    }
    //getter 
    public function getDonnee(){
        return $this->donnee;
    } 
}

?>