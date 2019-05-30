<?php

include_once 'Usuario.php';
include_once 'Conexao.php';

class Usuario extends ClassConexao {
     public $table = 'usuario';

    public function inserir(Usuarios $usuario) {
        $stmt = $this->conexao->prepare("INSERT INTO usuario (nome,email,celular,telefone,datanasc,tipo,senha)
        VALUES (:nome, :email, :celular, :telefone, :datanasc, :tipo, :senha)");

        $stmt->bindValue(':nome', $usuario->getnome());
        $stmt->bindValue(':email', $usuario->getemail());
        $stmt->bindValue(':celular', $usuario->getcelular());
        $stmt->bindValue(':telefone', $usuario->gettelefone());
        $stmt->bindValue(':datanasc', $usuario->getdatanasc());
        $stmt->bindValue(':tipo', $usuario->gettipo());
        $stmt->bindValue(':senha', $usuario->getsenha());

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
