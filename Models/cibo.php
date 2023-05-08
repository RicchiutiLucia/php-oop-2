<?php

require_once __DIR__ . '/prodotto.php';
require_once __DIR__ . '/../Traits/AnimalSize.php';

class Cibo extends Prodotto{
    public $pesonetto;
    public $ingredienti;

    use AnimalSize;


    public function __construct(
        string $immagine,
        string $nome,
        float $prezzo,
        Categorie $category,
        float $pesonetto,
        string $ingredienti,
        string $AnimalSize

        ) {
        $this->pesonetto = $pesonetto;
        $this->ingredienti = $ingredienti;
        parent ::__construct($immagine, $nome, $prezzo, $category);
        $this->AnimalSize = $AnimalSize;
              
}
}