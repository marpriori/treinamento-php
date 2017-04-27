<?php

class Carro {

    var $marca;
    var $modelo;
    var $cor;
    var $ano;
    var $ligado;
    
    function ligar(){
        $this->ligado = true;
    }
    function desligar(){
        $this->ligado = false;
    }

}