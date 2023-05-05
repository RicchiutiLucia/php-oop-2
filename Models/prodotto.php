<?php 

    include_once __DIR__ . '/category.php';

    class Prodotto{
        public $immagine;
        public $nome;
        public $prezzo;
        public $category;
        

        public function __construct(
            string $immagine,
            string $nome,
            float $prezzo,
            Categorie $category

            ) {
            this->immagine = $immagine;
            this->nome = $nome;
            this->prezzo = $prezzo;
            this->category = $category;      
  }

}


?>