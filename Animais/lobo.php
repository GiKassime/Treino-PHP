<?php 
require_once'mamifero.php';

class Lobo extends Mamifero{
    protected $corPelo;
    public function emitirSom(){
        print("<p>ROOFH!!");
    }
}
?>