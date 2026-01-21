<?php

require_once "./EntityAbstract.php"

class EstadoEntity extends EntityAbstract{
    public $logradouro;
    public $cep;
    public $bairro;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function __construct()
    {
        $this->tabelaNome = "estado";
    }
}