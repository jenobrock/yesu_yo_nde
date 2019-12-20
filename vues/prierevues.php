<?php
include_once('controller/DataBase.php');
class prierevues{
    public $donnee;
    public $data;
    public function __construct(){
        $this->data1= new Database();
    }
    public function priere($lib,$source){
        echo "
        <p>
          <img src=\"img/quote-sign-left.png\" class=\" quote-sign-left \" ><br>
         ".$lib."<br>
          <img src=\"img/quote-sign-right.png\" class=\"quote-sign-right\"  >
        </p>
        <p id=\" verset \">- ".$source."</p>
      ";
    }
    public function tous(){
        $this->reponse=$this->data1->prendre1("*","priere");
        $this->donnee=$this->reponse->fetch();
        
            $this->priere($this->donnee['libelle'],$this->donnee['source']);
      
    }
    

}
?>