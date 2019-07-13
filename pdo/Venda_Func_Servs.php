<?php

class Venda_Func_Servs {

    protected $quantidade;
    protected $id_vendas;
    protected $id_funcionario;
    protected $id_serv;
    protected $valor;

    


     public function __construct() {
      }

    public function __get($key) {
        return $this->$key;
    }
   public function __set($key,$value){
    return $this->$key = $value;
   }
}
?>