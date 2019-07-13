<?php

include_once 'Venda_Func_Servs.php';
include_once 'Conexao.php';

class Venda_Func_Serv extends ClassConexao {
     public $table = 'venda_func_serv';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir($venda_func_serv) {
        $stmt = $this->conexao->prepare("INSERT INTO venda_func_serv (quantidade,id_vendas,id_funcionario,id_serv,valor)
        VALUES (:quantidade, :id_vendas, :id_funcionario, :id_serv, :valor)");
        
     
        $stmt->bindParam(':quantidade', $venda_func_serv->quantidade);
        $stmt->bindParam(':id_vendas', $venda_func_serv->id_vendas);
        $stmt->bindParam(':id_funcionario', $venda_func_serv->id_funcionario);
        $stmt->bindParam(':id_serv', $venda_func_serv->id_serv);
        $stmt->bindParam(':valor', $venda_func_serv->valor);
        

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from venda_func_serv");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($id) {
   
        $stmt = $this->conexao->prepare("Select * from venda_func_serv where id LIKE '%$id%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM venda_func_serv WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($venda_func_serv){
          
            $stmt = $this->conexao->prepare('UPDATE venda_func_serv SET quantidade = :quantidade,id_vendas = :id_vendas,
            id_funcionario = :id_funcionario, id_serv = :id_serv, valor = :valor
            where id= :id');
               $stmt->bindValue(':id', $venda_func_serv->id);
               $stmt->bindValue(':quantidade', $venda_func_serv->quantidade);
               $stmt->bindValue(':id_vendas', $venda_func_serv->id_vendas);
               $stmt->bindValue(':id_funcionario', $venda_func_serv->id_funcionario);
               $stmt->bindValue(':id_serv', $venda_func_serv->id_serv);
               $stmt->bindValue(':valor', $venda_func_serv->valor);
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
