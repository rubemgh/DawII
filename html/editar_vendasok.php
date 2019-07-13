<?php
include_once '../pdo/Venda.class.php';
include_once '../pdo/Vendas.php';

$venda = new Vendas();

print_r($_POST);
if($_POST['quantidade']!=""){
    $venda->id = $_POST['id'];
    $venda->quantidade = $_POST['quantidade'];
    $venda->data_venda = $_POST["data_venda"];
    $venda->maneira_pagar = $_POST["maneira_pagar"];
    $venda->valor_total = $_POST["valor_total"];

  $banco = new Venda();

  $resultado = $banco->editar($venda);
}
if($resultado){
        echo"editado com sucesso";
}
 else{
	 echo"Venda não pode ser editado";
  }
  ?>