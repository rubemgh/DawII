<?php

class Servicos {

    protected $nome;
    protected $preco;
    protected $descricao;
    protected $imagem;
  


     public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
