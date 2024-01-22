<?php 
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login,$totAssistido;
    public function __construct($nome,$idade,string $login,$sexo)
    {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistido = 0;

    }
    public function  assistirMaisUm(){
        $this->totAssistido ++;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setTotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
}
?>