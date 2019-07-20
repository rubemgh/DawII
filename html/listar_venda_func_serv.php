<?php 
    include_once "topo.php";
?>
  
<div class="divposicao">
<form action="listar_venda_func_serv.php">
   Buscar:<input type="text" name="buscar"/>
 <input type="submit"/>
</form>
<br>
<style>
#tables {
        width: 100%;    
        background-color:#D9BD6A;
      }
      tr:nth-child(even){background-color: #F2CD13}
      tr, th {
      text-align: center;
      padding: 20px 35px;
      }
</style>
        <?php
       include_once '../pdo/Venda_Func_Serv.class.php';
       include_once '../pdo/Venda_Func_Servs.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Venda_Func_Serv();
         $venda_func_serv = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Venda_Func_Serv();
         $venda_func_serv = $conexao->Listar();
      }

      


      echo "<table style='width:50%' id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>quantidade </th>
      <th>id_vendas</th>
      <th>id_funcionario </th>
      <th> id_serv </th>
      <th> valor </th>
       <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($venda_func_serv as $Venda_Func_Serv) {


                echo"<tr>
                <td> ". $Venda_Func_Serv ['id']." </td>
                <td> ". $Venda_Func_Serv['quantidade']." </td>
                <td> ". $Venda_Func_Serv['id_vendas']." </td>
                <td> ". $Venda_Func_Serv['id_funcionario']." </td>
                <td> ". $Venda_Func_Serv['id_serv']." </td>
                <td> ". $Venda_Func_Serv['valor']." </td>
             
                 <td><a href='../html/editar_venda_func_serv.php?id=".$Venda_Func_Serv['id']."&quantidade=".$Venda_Func_Serv['quantidade']."&id_vendas=".$Venda_Func_Serv['id_vendas'].
                 "&id_funcionario=".$Venda_Func_Serv['id_funcionario']."&id_serv=".$Venda_Func_Serv['id_serv']."&valor=".$Venda_Func_Serv['valor']."'>Editar</a></td>
                 <td><a href='../html/apagar_venda_func_serv.php?id=".$Venda_Func_Serv['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>
        </div>
 <?php
    include_once "rodape.php";
?>
