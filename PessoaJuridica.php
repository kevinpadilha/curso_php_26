<?php

require_once "./PessoaAbstract.php";

define("QUEBRA_LINHA", "<br>");

class PessoaJuridica extends PessoaAbstract {

    public $CNPJ;

    public function __construct() {
        $this->resetarPessoa();
        $this->CNPJ = "";
    }

    public function validar() {
        $this->validarNome();

        if (!$this->validarCNPJ($this->CNPJ)) {
            throw new Exception("CNPJ inválido.");
        }

        return true;
    }

    private function validarNome() {
        if (empty($this->nome)) {
            throw new Exception("A razão social não pode estar em branco.");
        }
    }
}
