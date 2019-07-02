<?php
include_once '../pdo/Servico.class.php';
include_once '../pdo/Servicos.php';

$servico = new Servicos();
print_r($_POST);
if($_POST['nome']!=""){
  $servico->nome = $_POST['nome'];
  $servico->preco = $_POST['preco'];
  $servico->descricao = $_POST['descricao'];
  $servico->imagem = $_POST['imagem'];
  

  $banco = new Servico();

  $resultado = $banco->inserir( $servico);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_servico.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_servico.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}
