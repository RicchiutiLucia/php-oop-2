<?php

class Giocattoli extends Prodotto{
    public $caratteristiche;
    public $dimensioni;

    public function __construct(
        string $immagine,
        string $nome,
        float $prezzo,
        Categorie $category,
        string $caratteristiche,
        string $dimensioni
    
        )
    
        {
            $this->caratteristiche = $caratteristiche;
            $this->dimensioni = $dimensioni;
            parent::__construct($immagine, $nome, $prezzo, $category);
        }
}


?>