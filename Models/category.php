<?php
require_once __DIR__ . '/../Traits/AnimalSize.php';

class Categorie{
    public $nome;
    public $icona;

    use AnimalSize;


    public function __construct(
        string $nome,
        string $icona
    ){
        $this->nome = $nome;
        $this->icona = $icona;
    }
}



?>