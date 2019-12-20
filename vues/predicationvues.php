<?php
include_once('controller/predication1.php');
    class predicationvue {
      public $donnee;
      public $data;
      public function __construct(){
          $this->data1= new Database();
      }
        function block($ch_ex,$ch_l,$nom,$date1,$descr){
            echo "
             <a href=".$ch_ex.">
            <div class=\"col-md-4 wow fadeInUp\">
              <div class=\"about-col\">
                <div class=\"img col-md-12 col-xs-6\">
                  <img src=\"img/".$ch_l."/".$nom.".jpg\"  class=\"img-fluid img col-md-12 col-xs-6\">
                </div>
                <h2 class=\"title\"><a href=\"#\">Predications</a></h2>
                <p class=\"col-md-12 col-xs-6\">
                  Fait le :".$date1." <br> ".$descr."
                </p>
              </div>
            </div>
          </a>
            ";
        }

        function partenaire($ch_l,$nom){
          echo " <img src=\"img/partenaires/".$nom.".png\">";
      }
      function temoignage($desc,$aut,$ch){
        echo "<div class=\" testimonial-item \">
        <img src=\"img/".$ch.".jpg\" class=\" testimonial-img \">
        <h3>".$aut."</h3>
        <h4>Ceo &amp; Founder</h4>
        <p>
          <img src=\"img/quote-sign-left.png\" class=\"quote-sign-left\" >".$desc."
          <img src=\"img/quote-sign-right.png\" class=\"quote-sign-right\" >
        </p>
      </div>";
      }
        public function tous(){
          $this->reponse=$this->data1->prendre("*","predication,media");
          $this->donnee=$this->reponse->fetchAll();
          foreach($this->donnee as $cle=> $b){
             
              $this->block($b['ch_externe'],$b['ch_local'],$b['nom'],$b['date_creation'],$b['descriptif']);
         }
      }
      public function tous1(){
        $this->reponse=$this->data1->prendre("*","partenaire,Media");
        $this->donnee=$this->reponse->fetchAll();
        foreach($this->donnee as $cle=> $b){
           
            $this->partenaire($b['ch_local'],$b['nom']);
       }
}
public function tous2(){
  $this->reponse=$this->data1->prendre1("*","temoignage");
  $this->donnee=$this->reponse->fetchAll();
  foreach($this->donnee as $cle=> $b){
     
      $this->temoignage($b['descriptif'],$b['auteur'],$b['chemin']);
 }
}
    }

?>