<?php
include_once('controller/DataBase.php');
class conseilvues{
    public $donnee;
    public $data;
    public function __construct(){
        $this->data1= new Database();
    }
public function qu($q,$rep,$id){
    echo"<li>
    <a data-toggle=\" collapse \" class=\" collapsed \" href=\"#faq".$id."\">".$q."
      <i class=\" fa fa-minus-circle \"></i></a>
    <div id=\"faq".$id."\" class=\" collapse \" data-parent=\" #faq-list \">
      <p>
       ".$rep."
      </p>
    </div>
  </li>";
}public function tous(){
    $this->reponse=$this->data1->prendre1("*","conseil");
    $this->donnee=$this->reponse->fetch();
    
        $this->qu($this->donnee['question'],$this->donnee['reponse'],$this->donnee['id']);
  
}



}
?>