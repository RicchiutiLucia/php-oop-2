<?php

require_once __DIR__ . '/prodotto.php';

class Cibo extends Prodotto{
    public $pesonetto;
    public $ingredienti;


    public function __construct(
        string $immagine,
        string $nome,
        float $prezzo,
        Categorie $category,
        float $pesonetto,
        string $ingredienti

        ) {
        $this->pesonetto = $pesonetto;
        $this->ingredienti = $ingredienti;
        parent ::__construct($immagine, $nome, $prezzo, $category);
              
}
}