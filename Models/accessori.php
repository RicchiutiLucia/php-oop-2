<?php

require_once __DIR__ . '/prodotto.php';

class Accessori extends Prodotto{
    public $materiale;
    public $dimensioni;

    public function __construct(
        string $immagine,
        string $nome,
        float $prezzo,
        Categorie $category,
        string $materiale,
        string $dimensioni
    ){
        this->materiale = $materiale;
        this -> dimensioni = $dimensioni;
        parent::__construct($immagine,$nome,$prezzo,$category);
    }
}

?>