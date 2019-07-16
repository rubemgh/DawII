<?php
include_once '../pdo/Venda_Func_Serv.class.php';
include_once '../pdo/Venda_Func_Servs.php';

if(!isset($_GET['id']) || $_GET['id']== '' ){
    header('Location:listar_vendas_func_serv.php');
}
//Instancia o Objeto da clase:
$obj= new Venda_Func_Serv();
//atribui o valor que te no get ao id de objeto:
$obj->id = $_GET['id'];
//chama o objeto apagar
$resultado = $obj->apagar();

if($resultado)
echo"Venda_Func_Serv não pode ser excluida";
else
echo"Excluido com sucesso";
?>
<button onclick='window.location.href= "listar_venda_func_serv.php"'> Voltar para lista</button>

