<?php
include_once '../pdo/Funcionario.class.php';
include_once '../pdo/Funcionarios.php';

$funcionario = new Funcionarios();

print_r($_POST);
if($_POST['nome']!=""){
  $funcionario->id = $_POST['id'];
  $funcionario->nome = $_POST['nome'];
  

  $banco = new Funcionario();

  $resultado = $banco->editar($funcionario);
}
if($resultado){
        echo"editado com sucesso";
}
 else{
	 echo"Funcionario não pode ser editada";
  }
  ?>