<?php

include_once 'Servicos.php';
include_once 'Conexao.php';

class Servico extends ClassConexao {
     public $table = 'servico';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir( $servico) {
        $stmt = $this->conexao->prepare("INSERT INTO servico (nome,preco,descricao,imagem)
        VALUES (:nome, :preco, :descricao, :imagem)");
        
     
        $stmt->bindParam(':nome', $servico->nome);
        $stmt->bindParam(':preco', $servico->preco);
        $stmt->bindParam(':descricao', $servico->descricao);
        $stmt->bindParam(':imagem', $servico->imagem);

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from servico");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($nome) {
   
        $stmt = $this->conexao->prepare("Select * from servico where nome LIKE '%$nome%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM servico WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($servico){
          
            $stmt = $this->conexao->prepare('UPDATE servico SET nome = :nome, preco = :preco,
            descricao = :descricao, imagem = :imagem 
            where id= :id');
               $stmt->bindValue(':id', $servico->id);
               $stmt->bindValue(':nome', $servico->nome);
               $stmt->bindValue(':preco', $servico->preco);
               $stmt->bindValue(':descricao', $servico->descricao);
               $stmt->bindValue(':imagem', $servico->imagem);
       
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
