<?php
    include_once('controller/predication1.php');
    class partenairevue {
        public $h;
        function __construct(){
          $this->h=new Predication("*","partenaire,media");
        }
        function block($ch_l,$nom){
            echo " <img src=\"img/".$ch_l."/".$nom.".png\">";
        }
        function tous(){
        
            foreach($this->h->getDonnee() as $cle=> $b){
                 $this->block($b['ch_local'],$b['nom']);
            }
                    }
    }

?> 