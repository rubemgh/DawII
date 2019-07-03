<?php 
    include_once "topo.php";
?>
  <style>
     .divtamanho1{
        height:1800px;   
        }
        </Style>
<div class="divposicao">
<form action="listar_categoria.php">
   Buscar:<input type="text" name="buscar"/>
 <input type="submit"/>
</form>
<style>
#tables {
        width: 100%;    
        background-color:#D9BD6A;
      }
</style>

        <?php
       include_once '../pdo/Categoria.class.php';
       include_once '../pdo/Categorias.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Categoria();
         $categoria = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Categoria();
         $categoria = $conexao->Listar();
      }

      


      echo "<table style='width:50%' border id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>Nome </th>
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($categoria as $Categoria) {


                echo"<tr>
                <td> ". $Categoria ['id']." </td>
                <td> ". $Categoria['nome']." </td>
        
                 <td><a href='../html/editar_categoria.php?id=".$Categoria['id']. "&nome=".$Categoria['nome']."'>Editar</a></td>
                 <td><a href='../html/apagar_categoria.php?id=".$Categoria['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
     
        ?>
        </div>
 <?php
    include_once "rodape.php";
?>
