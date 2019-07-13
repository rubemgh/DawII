<?php 
    include_once "topo.php";
?>
 
<div class="divposicao">
<form action="listar_funcionario.php">
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
       include_once '../pdo/Funcionario.class.php';
       include_once '../pdo/Funcionarios.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Funcionario();
         $funcionario = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Funcionario();
         $funcionario = $conexao->Listar();
      }

      


      echo "<table style='width:50%' border id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>Nome </th>
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($funcionario as $Funcionario) {


                echo"<tr>
                <td> ". $Funcionario ['id']." </td>
                <td> ". $Funcionario['nome']." </td>
        
                 <td><a href='../html/editar_funcionario.php?id=".$Funcionario['id']. "&nome=".$Funcionario['nome']."'>Editar</a></td>
                 <td><a href='../html/apagar_funcionario.php?id=".$Funcionario['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
     
        ?>
        </div>
 <?php
    include_once "rodape.php";
?>
