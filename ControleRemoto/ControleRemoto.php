<?php
require_once 'controlador.php';
//Código da Classe  
 class  ControleRemoto implements Controlador {
     //Atributos da Classe  
    private int $volume;
    private bool $ligado;
    private bool $tocando;
    //Métodos especiais da Classe
    //Método construtor da Classe  
    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
        $this->abrirMenu();

    }
     //Métodos getters da classe
    private function getLigado(){
        return $this->ligado;
    }

    private function getVolume(){
        return $this->volume;
    }
    private function getTocando(){
        return $this->tocando;
    }
     //Métodos setters da classe

    private function setLigado($ligado){
       $this->ligado = $ligado;
    }
    private function setVolume($volume){
        $this->volume = $volume;
     }
    private function setTocando($tocando){
        $this->tocando = $tocando;
     }
     public  function desligar(){
        $this->setLigado(false);
     }
     public  function ligar(){
        $this->setLigado(true);
     }
     public  function abrirMenu(){
        echo "<br>Está ligado? ". ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando? ". ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume ". $this->getvolume();
        for ($i=0; $i <= $this->getVolume() ; $i+=10) { 
           echo " | ";
        }
        echo "<br>";
     }
     public  function fecharMenu(){
        echo "<br>Fechando Menu";

     }

     public  function maisVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 10);
        }
     }
     public  function menosVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 10);
        }
     }
     public  function ligarMudo(){
        if ($this->getLigado() and $this->getVolume() > 0) {
            $this->setVolume(0);
        }
     }
     public  function desligarMudo(){
        if ($this->getLigado() and $this->getVolume() == 0) {
            $this->setVolume(50);
        }
     }
     public  function play(){
        if($this->getLigado() and !($this->getTocando())){
            $this->setTocando(true);
        }
     }
     public  function pause(){
        if($this->getLigado() and $this->getTocando()){
            $this->setTocando(false);
        }
     }



 }