<?php 
require_once 'Video.php';
require_once 'Gafanhoto.php';
 class Visualizacao{
    private $espectador,$filme;
    public function __construct($espectador,$filme)
    {
        $this->espectador= $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);

    }
    public function avaliar(){
        $this->filme->setAvaliar(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliar($nota);

    }
    public function avaliarPorcentagem($porcentagem){
        $nota = 0;
        if($porcentagem < 20){
            $nota = 3;
        }elseif($porcentagem <= 50){
            $nota = 5;
        }elseif($porcentagem <= 90){
            $nota=8;
        }else{
            $nota = 10;
        }
        $this->filme->setAvaliar($nota);

    }

    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($espectador){
         $this->espectador = $espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($filme){
         $this->filme = $filme;
    }
 }
?>