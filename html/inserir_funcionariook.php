<?php
include_once '../pdo/Funcionario.class.php';
include_once '../pdo/Funcionarios.php';

$funcionario = new Funcionarios();
print_r($_POST);
if($_POST['nome']!=""){
  $funcionario->nome = $_POST['nome'];


  $banco = new Funcionario();

  $resultado = $banco->inserir( $funcionario);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_funcionario.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_funcionario.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}
