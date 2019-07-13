<?php

class Vendas {

    protected $quantidade;
    protected $data_venda;
    protected $maneira_pagar;
    protected $valor_total;
    


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