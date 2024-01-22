<?php 
require_once 'animal.php';

class Mamifero extends Animal{
    protected $corPelo;
    public function emitirSom(){
        print("<p>Som Mamífero");
    }
}
?>