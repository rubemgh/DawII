<?php

class Usuarios {

    protected $nome;
    protected $email;
    protected $celular;
    protected $telefone;
    protected $datanasc;
    protected $tipo;
    protected $senha;


     public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
