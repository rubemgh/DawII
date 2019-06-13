<?php
include_once '../pdo/Categoria.class.php';
include_once '../pdo/Categorias.php';

$categoria = new Categorias();
print_r($_POST);
if($_POST['nome']!=""){
  $categoria->nome = $_POST['nome'];


  $banco = new Categoria();

  $resultado = $banco->inserir( $categoria);
}
  if($resultado){
  echo"Funcionou";
 header('location:inserir_categoria.php?add=true');
  }
else{
 echo"Não Funcionou";
 header("Location:inserir_categoria.php?erro=nome");
    //echo "Campo nome é obrigatorio";
}
