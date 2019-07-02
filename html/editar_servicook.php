<?php
include_once '../pdo/Servico.class.php';
include_once '../pdo/Servicos.php';

$servico = new Servicos();

print_r($_POST);
if($_POST['nome']!=""){
  $servico->id = $_POST['id'];
  $servico->nome = $_POST['nome'];
  $servico->preco = $_POST['preco'];
  $servico->descricao = $_POST['descricao'];
  $servico->imagem = $_POST['imagem'];

  $banco = new Servico();

  $resultado = $banco->editar($servico);
}
if($resultado){
        echo"editado com sucesso";
}
 else{
	 echo"Servico não pode ser editado";
  }
  ?>