<?php 

    class Lutador{
        private string $nome,$nacionalidade,$categoria;
        private int $idade,$vitorias,$derrotas,$empates;
        private float $altura,$peso;

        public function apresentar(){
            echo"<br>O lutador ". $this->getNome();
            echo"<br>Origem ". $this->getNacionalidade();
            echo"<br>Idade ". $this->getIdade();
            echo"<br>Altura ". $this->getAltura();
            echo"<br>Peso ". $this->getPeso();
            echo"<br>Ganhou ". $this->getVitorias();
            echo"<br>Perdeu ". $this->getDerrotas();
            echo"<br>Empatou ". $this->getEmpates();
        }
        public function status(){
            echo"<br>O lutador ". $this->getNome();
            echo"<br>É um peso ". $this->getCategoria();
            echo"<br>Ganhou ". $this->getVitorias();
            echo"<br>Perdeu ". $this->getDerrotas();
            echo"<br>Empatou ". $this->getEmpates();
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias()+1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas()+1);

        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates()+1);

        }




        public function __construct(string $nome,string $nacionalidade,int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates){
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }
        private function setNome(string $n){
            $this->nome = $n;
        }
        protected function setCategoria(){
           if($this->getPeso() < 52.2){
                $this->categoria = "Inválido";
           }else if($this->getPeso() <= 70.3){
                 $this->categoria = "Leve";
           }else if($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
           }else if($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }
        private function setNacionalidade(string $n){
            $this->nacionalidade = $n;
        }
        private function setIdade(int $i){
            $this->idade = $i;
        }
        private function setAltura(float $i){
            $this->altura = $i;
        }
        private function setPeso(float $i){
            $this->peso = $i;
            $this->setCategoria();
        }
        private function setVitorias(int $i){
            $this->vitorias = $i;
        }
        private function setDerrotas(int $i){
            $this->derrotas = $i;
        }
        private function setEmpates(int $i){
            $this->empates = $i;
        }
        public function getNome(){
            return $this->nome;
        }
        private function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function getCategoria(){
            return $this->categoria;
           
        }
        private function getIdade(){
           return $this->idade;
        }
        private function getAltura(){
            return $this->altura;
        }
        private function getPeso(){
             return $this->peso;
        }
        private function getVitorias(){
            return $this->vitorias;
        }
        private function getDerrotas(){
            return $this->derrotas;
        }
        private function getEmpates(){
            return $this->empates;
        }
    }

?>