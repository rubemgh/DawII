<?php
include_once '../pdo/Usuario.class.php';
include_once '../pdo/Usuario.php';

$usuario = new Usuarios($nome,$email,$celular,
$telefone,$datanasc,$tipo,$senha);
print_r($_POST);
if($_POST['nome']!="")
  $usuario->nome = $_POST['nome'];
else
  header("Location:inserir.php?erro=nome");
    //echo "Campo nome é obrigatorio";

  $usuario->email= $_POST["email"];
  $usuario->celular = $_POST["celular"];
  $usuario->telefone = $_POST["telefone"];
  $usuario->datanasc = $_POST["datanasc"];
  $usuario->tipo = $_POST["tipo"];
  $usuario->senha= $_POST["senha"];
  $resultado = $usuario->inserir(Usuarios $usuario);
  if($resultado)
  echo"Funcionou";
else
 echo"Não Funcionou";
