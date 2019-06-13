<?php

class Categorias{

    protected $nome;
 


     public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
