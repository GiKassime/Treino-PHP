<?php
require_once('pessoa.php');
class Aluno extends Pessoa{
    //Atributos
    private $matr;
    private $curso;
    //Metodos
    public function cancelarMatr(){
        
    }
    //Metodos Especiais
    public function getMatr(){
        return $this->matr;

    }
    public function getCurso(){
        return $this->curso;
    }
    public function setMatr($m){
         $this->matr = $m;

    }
    public function setCurso($c){
         $this->curso = $c;
    }
}