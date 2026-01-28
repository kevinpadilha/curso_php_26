<?php

//CRUD - CREATE, READ, UPDATE, DELETE

interface EntityInterface {
    public function criar();
    public function obter();
    public function obterTodos($filtros = "");
    public function atualizar($id);
    public function deletar($id);
}

// MODEL || Entity, Representa a tabela do banco na programacao.
abstract class EntityAbstract implements EntityInterface {
    public $id;
    public $tabelaNome;
    public $criadoEm;
    public $atualizadoEm;
    public $usuarioAlteracao;
}

public function criar() {

    }
    
    public function obter($id) {

    }
    
    public function obterTodos($filtros = "") {

    }
    
    public function atualizar($id) {

    }
    
    public function deletar($id) {

    }

}