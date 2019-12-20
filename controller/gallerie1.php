<?php
include_once('Media.php');
class Gallerie extends Media{
    protected $descriptif;
    public function __construct($champ,$table)
    {
       parent::__construct($champ,$table);
    }
}
?>