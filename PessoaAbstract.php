<?php

abstract class PessoaAbstract {

    public $nome;
    public $idade;
    public $logradouro; 
    public $cep;
    public $bairro;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function resetarPessoa() {
        $this->nome = "";
        $this->idade = "";
        $this->logradouro = ""; 
        $this->cep = "";
        $this->bairro = "";
        $this->cidade = "";
        $this->estado = "";
        $this->numero = "";
        $this->complemento = "";
        $this->pontoReferencia = "";
    }


    public function validarCPF($cpf) {
        
        $cpf = preg_replace('/[^0-9]/', '', $cpf); // Remove caracteres não numéricos

        
        if (strlen($cpf) != 11) { // Verifica se tem 11 dígitos
            return false;
        }

        return true; // validação simples
    }

    public function validarCNPJ($cnpj) {
        
        $cnpj = preg_replace('/[^0-9]/', '', $cnpj);  // Remove caracteres não numéricos

       
        if (strlen($cnpj) != 14) {   // Verifica se tem 14 dígitos
            return false;
        }

        return true; // validação simples
    }
}