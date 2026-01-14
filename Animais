<?php

define("QUEBRAR_LINHA", "<br>");

interface AnimaisInterface {
    public function emitirSom();
}

abstract class Animais implements AnimaisInterface {
    public $nome;

    public function emitirSom() {
        return "Ola Mundo!"; // so quando nao implementei nas classes filhas vai executar
    }
}

class Cachorro{
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
    
    public function emitirSom() {
        return "O {$this->nome} diz: Au au!" . QUEBRAR_LINHA;
    }
}


class Gato {
     public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
    
    public function emitirSom() {
        return "O {$this->nome} diz: Miau miau!" . QUEBRAR_LINHA;
    }
}



class Papagaio {
     public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
    
    public function emitirSom() {
        return "O {$this->nome} diz: Olá!" . QUEBRAR_LINHA;
    }
}

$cachorro = new Cachorro("Caramelo");
echo $cachorro->emitirSom();

$gato = new Gato("Bigode");
echo $gato->emitirSom();

$papagaio = new Papagaio("Rico");
echo $papagaio->emitirSom();
