<?php
include_once '../pdo/Usuario.class.php';
include_once '../pdo/Usuarios.php';

if(!isset($_GET['id']) || $_GET['id']== '' ){
    header('Location:listar_usuario.php');
}
//Instancia o Objeto da clase:
$obj= new Usuario();
//atribui o valor que te no get ao id de objeto:
$obj->id = $_GET['id'];
//chama o objeto apagar
$resultado = $obj->apagar();

if($resultado)
echo"Usuario não pode ser excluida";
else
echo"Excluido com sucesso";
?>
<button onclick='window.location.href= "listar_usuario.php"'> Voltar para lista</button>

