<?php 
require_once 'AcoesVideo.php';
class Video implements Acoesvideo{
    private $titulo,$avaliacao,$views,$curtidas,$reproduzindo;
    public function play(){
        $this->reproduzindo = true;
    }
    public function like(){
        $this->curtidas ++;

    }
    public function pause(){
        $this->reproduzindo = false;

    }
    public function __construct($titulo){
       $this->views =0;
       $this->curtidas =0;
       $this->avaliacao =1;
       $this->titulo =$titulo;
       $this->reproduzindo =false;

        
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao){
        $media = 0;
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
        
    }
    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
        
    }
    public function setViews($views){
        $this->views = $views;
        
    }
    public function setReproduzindo($repoduzindo){
        $this->reproduzindo = $repoduzindo;
        
    }
    public function getTitulo(){
        return  $this->titulo;

    }
    public function getAvaliacao(){
        return  $this->avaliacao;
        
    }
    public function getCurtidas(){
        return  $this->curtidas;
        
    }
    public function getViews(){
        return  $this->views;
    }
    public function getReproduzindo(){
        return  $this->reproduzindo;
        
    }
}
?>