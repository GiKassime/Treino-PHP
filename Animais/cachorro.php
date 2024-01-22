<?php 
require_once'lobo.php';

class Cachorro extends Lobo{
    public function emitirSom(){
        print("<p>AUU!AU!");//Sobreposição
    }
    public function reagirFrase(string $frase){
        if($frase =="Toma comida" || $frase =="Olá"){
            print("Abanar");
        }else{
            print("Rosnar");
        }
    }
    public function reagirDono(bool $dono){
        if($dono){
            print("Abanar");
        }else{
            print('Rosnar');
        }
    }
    //Maneira mais simples de fazer uma imitar mas fazer diferente a sobrecarrega em PHP já que n da pra fazer, é criar métodos com nomes diferentes 
}

?>