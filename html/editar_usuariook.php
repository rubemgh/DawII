<?php
include_once '../pdo/Usuario.class.php';
include_once '../pdo/Usuarios.php';

$usuario = new Usuarios();

print_r($_POST);
if($_POST['nome']!=""){
  $usuario->id = $_POST['id'];
  $usuario->nome = $_POST['nome'];
  $usuario->email= $_POST["email"];
  $usuario->celular = $_POST["celular"];
  $usuario->telefone = $_POST["telefone"];
  $usuario->datanasc = $_POST["datanasc"];
  $usuario->tipo = $_POST["tipo"];
  $usuario->senha= $_POST["senha"];

  $banco = new Usuario();

  $resultado = $banco->editar($usuario);
}
if($resultado){
        echo"editado com sucesso";
}
 else{
	 echo"Usuario não pode ser editado";
  }
  ?>