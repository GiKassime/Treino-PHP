<?php
class Pessoa{
    //Atributos
    private $nome;
    private $idade;
    private $sexo;
    //Métodos
    public function fazerAniv(){
        $this->idade ++;
    }
    //Métodos Especiais
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;

    }public function getSexo(){
        return $this->sexo;
        
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function setIdade($i){
        $this->idade = $i;

    }public function setSexo($s){
        $this->sexo = $s;

    }
    
}