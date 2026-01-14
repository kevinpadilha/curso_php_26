<?php

require_once "./PessoaAbstract.php"

define("QUEBRA_LINHA", "<br>");

class PessoaJuridica extends PessoaAbstract {
    
     public function __construct()
    {
        $this->resetarPessoa()
        $this->CNPJ = "";
    }

    public function validar() {
        $cnpj = $this->CNPJ;

        $this->validarCNPJ($cnpj);
    }
    
}