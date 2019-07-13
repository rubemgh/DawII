<?php

include_once 'Vendas.php';
include_once 'Conexao.php';

class Venda extends ClassConexao {
     public $table = 'vendas';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir($venda) {
        $stmt = $this->conexao->prepare("INSERT INTO vendas (quantidade,data_venda,maneira_pagar,valor_total)
        VALUES (:quantidade, :data_venda, :maneira_pagar, :valor_total)");
        
     
        $stmt->bindParam(':quantidade', $venda->quantidade);
        $stmt->bindParam(':data_venda', $venda->data_venda);
        $stmt->bindParam(':maneira_pagar', $venda->maneira_pagar);
        $stmt->bindParam(':valor_total', $venda->valor_total);
        

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from vendas");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($maneira_pagar) {
   
        $stmt = $this->conexao->prepare("Select * from vendas where maneira_pagar LIKE '%$maneira_pagar%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM vendas WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($venda){
          
            $stmt = $this->conexao->prepare('UPDATE vendas SET quantidade = :quantidade,data_venda = :data_venda,
            maneira_pagar = :maneira_pagar, valor_total = :valor_total
            where id= :id');
               $stmt->bindValue(':id', $venda->id);
               $stmt->bindValue(':quantidade', $venda->quantidade);
               $stmt->bindValue(':data_venda', $venda->data_venda);
               $stmt->bindValue(':maneira_pagar', $venda->maneira_pagar);
               $stmt->bindValue(':valor_total', $venda->valor_total);
            
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
