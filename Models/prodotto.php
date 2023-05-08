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
            $this->immagine = $immagine;
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->category = $category;      
  }

        public function changePrice($newPrezzo){
            if(!is_numeric($newPrezzo)){
                throw new Exception('Il nuovo prezzo non è valido!');
            }
            $this->prezzo = $newPrezzo;
            
            
        }

        

}


?>