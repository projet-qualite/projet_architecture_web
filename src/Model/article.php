<?php

class Article
{
    public $nom;
    public $id;

    public function __construct($id, $nom) 
    {
        $this->nom = $nom;
        $this->id = $id;
    }
}


?>