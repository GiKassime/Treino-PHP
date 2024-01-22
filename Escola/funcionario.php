<?php
require_once('pessoa.php');
class Funcionario extends Pessoa{
    //Atributos
    private $setor;
    private $trabalhando;
    //Metodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
    //Metodos Especiais
    public function getTrabalhando(){
        return $this->trabalhando;

    }
    public function getSetor(){
        return $this->setor;
    }
    public function setTrabalhando($t){
         $this->trabalhando = $t;

    }
    public function setSetor($s){
         $this->setor = $s;
    }
}