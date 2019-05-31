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
   
    $stmt = $this->conexao->prepare("Select From usuario (id,nome,email,celular,telefone,datanasc,tipo,senha)
     VALUES (:id,:nome, :email, :celular, :telefone, :datanasc, :tipo, :senha)");
     
    $stmt->bindParam(':id', $usuario->id);
    $stmt->bindParam(':nome', $usuario->nome);
    $stmt->bindParam(':email', $usuario->email);
    $stmt->bindParam(':celular', $usuario->celular);
    $stmt->bindParam(':telefone', $usuario->telefone);
    $stmt->bindParam(':datanasc', $usuario->datanasc);
    $stmt->bindParam(':tipo', $usuario->tipo);
    $stmt->bindParam(':senha', $usuario->senha);

    return $stmt->execute();
    }


}
