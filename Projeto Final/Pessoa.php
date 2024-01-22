<?php 

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct(string $nome, int $idade,string $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;


    }
    protected function ganharExp($e){
        $this->experiencia += $e;
    }
}

?>