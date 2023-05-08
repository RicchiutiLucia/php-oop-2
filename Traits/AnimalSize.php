
<?php


trait AnimalSize {
    public $AnimalSize;

    public function setSize($AnimalSize){
        $this->AnimalSize = $AnimalSize;

    }

    public function getSize(){
        return $this->AnimalSize;
    }
}