<?php
include_once '../pdo/Categoria.class.php';
include_once '../pdo/Categorias.php';

if(!isset($_GET['id']) || $_GET['id']== '' ){
    header('Location:listar_categoria.php');
}
//Instancia o Objeto da clase:
$obj= new Categoria();
//atribui o valor que te no get ao id de objeto:
$obj->id = $_GET['id'];
//chama o objeto apagar
$resultado = $obj->apagar();

if($resultado)
echo"Categoria não pode ser excluida";
else
echo"Excluido com sucesso";
?>
<button onclick='window.location.href= "listar_categoria.php"'> Voltar para lista</button>
