<?php
    class temoignagevue {
      public $h;
      function __construct(){
        $this->h=new Predication("*","temoignage,media");
      }
        function block($ch_l,$nom,$descr){
            echo " 
            <div class=\"testimonial-item\">
            <img src=\"img/".$ch_l."/".$nom.".jpg\" class=\"testimonial-img\" >
            <p>
              <img src=\"img/quote-sign-left.png\" class=\"quote-sign-left\" >".$descr."
              <img src=\"img/quote-sign-right.png\" class=\"quote-sign-right\" >
            </p>
          </div>
            ";
        }
        function tous(){
        
          foreach($this->h->getDonnee() as $cle=> $b){
               $this->block($b['ch_local'],$b['nom'],$b['descriptif']);
          }
                  }
    }

?>