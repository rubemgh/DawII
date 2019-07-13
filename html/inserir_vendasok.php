<?php
include_once '../pdo/Venda.class.php';
include_once '../pdo/Vendas.php';

$venda = new Vendas();
print_r($_POST);
if($_POST['quantidade']!=""){
  $venda->quantidade = $_POST['quantidade'];
  $venda->data_venda = $_POST["data_venda"];
  $venda->maneira_pagar = $_POST["maneira_pagar"];
  $venda->valor_total = $_POST["valor_total"];

  $banco = new Venda();

  $resultado = $banco->inserir($venda);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_vendas.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_vendas.php?erro=quantidade");
    //echo "Campo nome é obrigatorio";
}
