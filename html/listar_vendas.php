<?php 
    include_once "topo.php";
?>
  
<div class="divposicao">
<form action="listar_vendas.php">
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
       include_once '../pdo/Venda.class.php';
       include_once '../pdo/Vendas.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Venda();
         $venda = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Venda();
         $venda = $conexao->Listar();
      }

      


      echo "<table style='width:50%' border id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>quantidade </th>
      <th>data-venda</th>
      <th>maneira_pagar </th>
      <th> venda_total </th>
       <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($venda as $Venda) {


                echo"<tr>
                <td> ". $Venda ['id']." </td>
                <td> ". $Venda['quantidade']." </td>
                <td> ". $Venda['data_venda']." </td>
                <td> ". $Venda['maneira_pagar']." </td>
                <td> ". $Venda['valor_total']." </td>
             
                 <td><a href='../html/editar_vendas.php?id=".$Venda['id']."&quantidade=".$Venda['quantidade']."&data_venda=".$Venda['data_venda'].
                 "&maneira_pagar=".$Venda['maneira_pagar']."&valor_total=".$Venda['valor_total']."'>Editar</a></td>
                 <td><a href='../html/apagar_venda.php?id=".$Venda['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>
        </div>
 <?php
    include_once "rodape.php";
?>
