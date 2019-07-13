<?php
include_once '../pdo/Usuario.class.php';
include_once '../pdo/Usuarios.php';

$usuario = new Usuarios();
print_r($_POST);


if($_POST['nome']!=""){
  $sha256 = hash('sha256',$_POST["senha"]);
  $usuario->nome = $_POST['nome'];
  $usuario->email= $_POST["email"];
  $usuario->celular = $_POST["celular"];
  $usuario->telefone = $_POST["telefone"];
  $usuario->datanasc = $_POST["datanasc"];
  $usuario->tipo = $_POST["tipo"];
  $usuario->senha= $sha256;
 

  $banco = new Usuario();

  $resultado = $banco->inserir($usuario);
}

  if($resultado){
  echo"Funcionou";
 header('location:inserir_usuario.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_usuario.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}
