<?php
include_once '../pdo/Servico.class.php';
include_once '../pdo/Servicos.php';

if(!isset($_GET['id']) || $_GET['id']== '' ){
    header('Location:listar_servico.php');
}
//Instancia o Objeto da clase:
$obj= new Servico();
//atribui o valor que te no get ao id de objeto:
$obj->id = $_GET['id'];
//chama o objeto apagar
$resultado = $obj->apagar();

if($resultado)
echo"Servico não pode ser excluida";
else
echo"Excluido com sucesso";
?>
<button onclick='window.location.href= "listar_servico.php"'> Voltar para lista</button>

