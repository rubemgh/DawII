<?php

include_once 'Usuarios.php';
include_once 'Conexao.php';

class Usuario extends ClassConexao {
     public $table = 'usuario';
     protected $conexao = null;

     public function __construct(){
         $this->conexao = $this->conectaDB();
         
     }
    public function inserir( $usuario) {
        $stmt = $this->conexao->prepare("INSERT INTO usuario (nome,email,celular,telefone,datanasc,tipo,senha)
        VALUES (:nome, :email, :celular, :telefone, :datanasc, :tipo, :senha)");
        
     
        $stmt->bindParam(':nome', $usuario->nome);
        $stmt->bindParam(':email', $usuario->email);
        $stmt->bindParam(':celular', $usuario->celular);
        $stmt->bindParam(':telefone', $usuario->telefone);
        $stmt->bindParam(':datanasc', $usuario->datanasc);
        $stmt->bindParam(':tipo', $usuario->tipo);
        $stmt->bindParam(':senha', $usuario->senha);

        return $stmt->execute();
        //INSERT INTO usuario (username, pws, email) VALUES ('teste', '123', 'geisonq@gmail.com', 1);

    }
    
     public function Listar() {
   
    $stmt = $this->conexao->prepare("Select * from usuario");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    return $resultado;
    }
    public function Listarnome($nome) {
   
        $stmt = $this->conexao->prepare("Select * from usuario where nome= $nome");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function apagar() {
   
        $stmt = $this->conexao->prepare("Delete FROM usuario WHERE id = $this->id");
        $stmt->execute();
    
        $resultado = $stmt->fetchAll();
    
        return $resultado;
        }
    public function editar($usuario){
          
            $stmt = $this->conexao->prepare('UPDATE usuario SET nome = :nome,email= :email,
            celular= :celular,telefone = :telefone,datanasc = :datanasc,tipo = :tipo,senha = :senha 
            where id= :id');
               $stmt->bindValue(':id', $usuario->id);
               $stmt->bindValue(':nome', $usuario->nome);
               $stmt->bindValue(':email', $usuario->email);
               $stmt->bindValue(':celular', $usuario->celular);
               $stmt->bindValue(':telefone', $usuario->telefone);
               $stmt->bindValue(':datanasc', $usuario->datanasc);
               $stmt->bindValue(':tipo', $usuario->tipo);
               $stmt->bindValue(':senha', $usuario->senha);
     
          $resultado = $stmt->execute();
           
         /*$resultado = $stmt->fetchAll();*/
        
            return $resultado;
           
        } 
    }
