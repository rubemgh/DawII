<?php

include_once 'Funcionarios.php';
include_once 'Conexao.php';

class Funcionario extends ClassConexao {
     public $table = 'funcionario';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir( $funcionario) {
        $stmt = $this->conexao->prepare("INSERT INTO funcionario (nome)
        VALUES (:nome)");
        
     
        $stmt->bindParam(':nome', $funcionario->nome);
      
        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from funcionario");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($nome) {
   
        $stmt = $this->conexao->prepare("Select * from funcionario where nome LIKE '%$nome%'");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM funcionario WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($funcionario){
          
            $stmt = $this->conexao->prepare('UPDATE funcionario SET nome = :nome 
            where id= :id');
               $stmt->bindValue(':id', $funcionario->id);
               $stmt->bindValue(':nome', $funcionario->nome);
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
