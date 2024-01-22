<?php 
 require_once "Lutador.php";
         class Luta {
            private $desafiado;
            private $desafiante;
            private int $rounds;
            private bool $aprovada;
            public function marcarLuta($l1,$l2){
                    if($l1->getCategoria() === $l2->getCategoria() and $l1 != $l2){
                        $this->aprovada = true;
                        $this->setDesafiado($l1);
                        $this->setDesafiante($l2);                        
                    }else{
                        $this->aprovada = false;
                        $this->setDesafiado(null);
                        $this->setDesafiante(null); 
                    }
            }
            public function lutar(){
                if($this->aprovada == true){
                    $this->desafiado->apresentar();
                    $this->desafiante->apresentar();
                    $vencedor = rand(0,2);
                    switch ($vencedor) {
                        case '0':
                            echo "<br> EMPATE ";
                            $this->desafiante->empatarLuta();
                            $this->desafiado->empatarLuta();
                            break;
                        case '1':
                            echo "<br> O LUTADOR ".$this->desafiado->getNome(). " VENCEU";
                            $this->desafiante->perderLuta();
                            $this->desafiado->ganharLuta();
                            break;
                        case '2':
                            echo "<br> O LUTADOR ".$this->desafiante->getNome(). " VENCEU";
                            $this->desafiante->ganharLuta();
                            $this->desafiado->perderLuta();
                            break;
                        default:
                            # code...
                            break;
                    }
                    $this->desafiante->status();
                    $this->desafiado->status();
                }else{
                    echo "<br>Luta não pode ser aprovada";
                }
            }
            private function getRounds(){
                return $this->rounds;
            }
            private function getAprovada(){
                return $this->aprovada;

            }
            private function getDesafiado(){
                return $this->desafiado;
            }
            private function getDesafiante(){
                return $this->desafiante;
            }
            private function setRounds($i){
                 $this->rounds = $i;
            }
            private function setAprovada($i){
                 $this->aprovada = $i;

            }
            private function setDesafiado($i){
                 $this->desafiado = $i;
            }
            private function setDesafiante($i){
                 $this->desafiante = $i;
            }
         }

?>