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

  public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $usuarios = array();

        while ($linha = $stmt->fetch()) {
            $usuario = new Usuario();
            $usuario->setEmail($linha['email']);
            $usuario->setPassword($linha['pws']);
            $usuario->setUsername($linha['username']);
            $usuario->setId($linha['id']);

            $usuarios[] = $usuario;
        }
        return $usuarios;
    }


}
