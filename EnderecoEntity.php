<?php

class EnderecoEntity{
    public $id;
    public $logradouro;
    public $cep;
    public $bairro;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function __construct()
    {
        $this->tabelaNome = "endereco";
    }


}