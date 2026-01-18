<?php

require_once "./PessoaAbstract.php";

define("QUEBRAR_LINHA", "<br>");

class PessoaFisica extends PessoaAbstract {

    public $CPF;

    public function __construct() {
        $this->resetarPessoa();
        $this->CPF = "";
    }

    public function validar() {
        $this->validarNome();

        if (!$this->validarCPF($this->CPF)) {
            throw new Exception("CPF inválido.");
        }

        return true;
    }

    private function validarNome() {
        if (empty($this->nome)) {
            throw new Exception("O nome não pode estar em branco, preencha o nome.");
        }
    }
}
