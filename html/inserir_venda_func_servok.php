<?php
include_once '../pdo/Venda_Func_Serv.class.php';
include_once '../pdo/Venda_Func_Servs.php';

$venda_func_serv = new Venda_Func_Servs();
print_r($_POST);
if($_POST['quantidade']!=""){
  $venda_func_serv->quantidade = $_POST['quantidade'];
  $venda_func_serv->id_vendas = $_POST["id_vendas"];
  $venda_func_serv->id_funcionario = $_POST["id_funcionario"];
  $venda_func_serv->id_serv = $_POST["id_serv"];
  $venda_func_serv->valor = $_POST["valor"];
 

  $banco = new Venda_Func_Serv();

  $resultado = $banco->inserir($venda_func_serv);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_venda_func_serv.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_venda_func_serv.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}
