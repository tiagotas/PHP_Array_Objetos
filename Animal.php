<?php

abstract class Animal {

    public $nome;
    public $cor;
    public $raca;

    public function __construct($_nome)
    {
        $this->nome = $_nome;
    }

    public function dorme() {
        echo $this->nome . " está domindo. <br />";
    }


    public function come($_comida) {
        
        echo $this->nome . " está comendo " . $_comida . "<br />";
    }
}