<?php 
/*Classe abstrata dos animais, da qual não pode virar um objeto! e sim suas classes filhas herdam seus métodos e atributos podendo sobrepor ou sobrecarregar(PHP não suporta a sobrecarga de métodos, usarei outra ténica para contornar tal problema) eles, dependendo de sua necessidade.
    Método de sobrecarga == possuir a mesma assinatura(tipo e quantidades de parametros)
    Método de sobreposição != possuir a mesma assinatura(tipo e quantidades de parametros)*/
abstract class Animal{
    protected $peso,$idade,$membros;
    public abstract function emitirSom();
}
//não coloquei métodos getters e setters por pura preguiça :)

?>