<?php
include_once('controller/DataBase.php');
class indexvues{
    public $donnee;
    public $data;
    public function __construct(){
        $this->data1= new Database();
    }
    public function intro($nom,$text1,$text2,$act){
        echo "<div class=\"carousel-item ".$act."\" style=\"background-image: url('img/intro-carousel/".$nom.".jpg');\">
        <div class=\"carousel-container\">
          <div class=\"carousel-content\">
            <h2>".$text1."</h2>
            <p>".$text2."</p>
          </div>
        </div>
      </div>";
    }
    public function gallerie($nom,$nom1,$prix){
        echo "<div class=\" bga col-md-3 col-sm-6 col-xs-12 \"><a data-target=\" #form2\" >
        <div class=\"who \">
          <img src=\"img/gallerie/".$nom.".jpg \" alt=\"icon\" class=\" img-fluid wow fadeInUp \">
          <h4>".$nom1."</h4>
          <p class=\"lead\">Prix : ".$prix."</p>
        </div>
        </a>
      </div>";
    }
    public function activites($nom,$nom1,$descriptif,$categorie){
        echo "<div class=\" col-lg-4 col-md-6 portfolio-item ".$categorie." wow fadeInUp \" data-wow-delay=\" 0.1s \">
        <div class=\" portfolio-wrap \">
          <figure>
            <img src=\"img/Activites/".$nom.".jpg\" class=\"img-fluid\" >
            <a href=\"img/Activites/".$nom.".jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"".$nom1."\"
              
          </figure>

          <div class=\"portfolio-info\">
            <h4><a href=\"#\">".$nom1."</a></h4>
            <p>".$descriptif."</p>
          </div>
        </div>
      </div>";
    }
    function partenaire($ch_l,$nom){
      echo " <img src=\"img/".$ch_l."/".$nom.".png\">";
  }
  function temoignage($desc,$aut,$ch){
    echo "<div class=\" testimonial-item \">
    <img src=\"img/temoignages/".$ch.".jpg\" class=\" testimonial-img \">
    <h3>".$aut."</h3>
    <h4>Ceo &amp; Founder</h4>
    <p>
      <img src=\"img/quote-sign-right.png\" class=\"quote-sign-left\" >".$desc."
      <img src=\"img/quote-sign-right.png\" class=\"quote-sign-right\" >
    </p>
  </div>";
  }
    public function tous(){
        $this->reponse=$this->data1->prendre4("*","intro",5);
        $this->donnee=$this->reponse->fetchAll();
        foreach($this->donnee as $cle=> $b){
            $act="";
            if($b['idIntro']%5==1){
                $act="active";
            }
            $this->intro($b['nom'],$b['text1'],$b['text2'],$act);
       }
    }
    public function tous1(){
        $this->reponse=$this->data1->prendre2("*","gallerie",4);
        $this->donnee=$this->reponse->fetchAll();
        foreach($this->donnee as $cle=> $b){
           
            $this->gallerie($b['nom'],$b['nom1'],$b['prix']);
       }
    }
    public function tous2(){
        $this->reponse=$this->data1->prendre1("*","activites");
        $this->donnee=$this->reponse->fetchAll();
        foreach($this->donnee as $cle=> $b){
           
            $this->activites($b['nom'],$b['nom1'],$b['descriptif'],$b['categorie']);
       }
    }
    public function tous3(){
      $this->reponse=$this->data1->prendre("*","partenaire,Media");
      $this->donnee=$this->reponse->fetchAll();
      foreach($this->donnee as $cle=> $b){
         
          $this->partenaire($b['ch_local'],$b['nom']);
     }
  }
  public function tous4(){
    $this->reponse=$this->data1->prendre1("*","temoignage");
    $this->donnee=$this->reponse->fetchAll();
    foreach($this->donnee as $cle=> $b){
       
        $this->temoignage($b['descriptif'],$b['auteur'],$b['chemin']);
   }
}
}
?>