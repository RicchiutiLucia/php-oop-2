<?php

class Categorie{
    public $nome;
    public $icona;


    public function __construct(
        string $nome,
        string $icona
    ){
        this->nome = $nome;
        this->icona = $icona;
    }
}



?>