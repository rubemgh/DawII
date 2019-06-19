<?php
include_once '../pdo/Funcionario.class.php';
include_once '../pdo/Funcionarios.php';

if(!isset($_GET['id']) || $_GET['id']== '' ){
    header('Location:listar_funcionario.php');
}
//Instancia o Objeto da clase:
$obj= new Funcionario();
//atribui o valor que te no get ao id de objeto:
$obj->id = $_GET['id'];
//chama o objeto apagar
$resultado = $obj->apagar();

if($resultado)
echo"Funcionario não pode ser excluida";
else
echo"Excluido com sucesso";
?>
<button onclick='window.location.href= "listar_funcionario.php"'> Voltar para lista</button>
