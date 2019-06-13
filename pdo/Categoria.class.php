<?php

include_once 'Categorias.php';
include_once 'Conexao.php';

class Categoria extends ClassConexao {
     public $table = 'categoria';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir( $categoria) {
        $stmt = $this->conexao->prepare("INSERT INTO categoria (nome)
        VALUES (:nome)");
        
     
        $stmt->bindParam(':nome', $categoria->nome);
      
        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from categoria");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($nome) {
   
        $stmt = $this->conexao->prepare("Select * from categoria where nome LIKE '%$nome%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM categoria WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($categoria){
          
            $stmt = $this->conexao->prepare('UPDATE categoria SET nome = :nome 
            where id= :id');
               $stmt->bindValue(':id', $categoria->id);
               $stmt->bindValue(':nome', $categoria->nome);
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
