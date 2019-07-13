<?php
include_once '../pdo/Venda_Func_Serv.class.php';
include_once '../pdo/Venda_Func_Servs.php';

$venda_func_serv = new Venda_Func_Servs();

print_r($_POST);
if($_POST['quantidade']!=""){
    $venda_func_serv->id = $_POST['id'];
    $venda_func_serv->quantidade = $_POST['quantidade'];
    $venda_func_serv->id_vendas = $_POST["id_vendas"];
    $venda_func_serv->id_funcionario = $_POST["id_funcionario"];
    $venda_func_serv->id_serv = $_POST["id_serv"];
    $venda_func_serv->valor = $_POST["valor"];

  $banco = new Venda_Func_Serv();

  $resultado = $banco->editar($venda_func_serv);
}
if($resultado){
        echo"editado com sucesso";
}
 else{
	 echo"venda_func_serv não pode ser editado";
  }
  ?>