<?php
include_once('controller/DataBase.php');
class gallerievues{
    public $donnee;
    public $data;
    public function __construct(){
        $this->data1= new Database();
    }
    public function gallerie($nom,$nom1,$prix){
        echo "<div class=\" bga col-md-3 col-sm-6 col-xs-12 \"><a data-target=\" #form2\" >
        <div class=\"who \">
          <img src=\"img/gallerie/".$nom.".jpg \" alt=\"icon\" class=\" wow fadeInUp \">
          <h4>".$nom1."</h4>
          <p class=\"lead\">Prix : ".$prix."</p>
        </div>
        </a>
      </div>";
    }
    public function tous(){
        $this->reponse=$this->data1->prendre1("*","gallerie");
        $this->donnee=$this->reponse->fetchAll();
        foreach($this->donnee as $cle=> $b){
           
            $this->gallerie($b['nom'],$b['nom1'],$b['prix']);
       }
    }
}

?>