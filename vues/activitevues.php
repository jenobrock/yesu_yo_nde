<?php
include_once('controller/DataBase.php');
class activitevues{
    public $donnee;
    public $data;
    public function __construct(){
        $this->data1= new Database();
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
        $this->reponse=$this->data1->prendre1("*","activites");
        $this->donnee=$this->reponse->fetchAll();
        foreach($this->donnee as $cle=> $b){
           
            $this->activites($b['nom'],$b['nom1'],$b['descriptif'],$b['categorie']);
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