<?php 
    include_once "topo.php";
?>

<div class="divposicao">
<form action="listar_servico.php">
   Buscar:<input type="text" name="buscar"/>
 <input type="submit"/>
</form>
<style>
#tables {
        width: 100%;    
        background-color:#D9BD6A;
      }
.divtamanho{
   
    height:1800px;   
}

</style>
        <?php
       include_once '../pdo/Servico.class.php';
       include_once '../pdo/Servicos.php';
        
      if (isset($_GET['buscar'])){
         $conexao = new Servico();
         $servico = $conexao->Listarnome($_GET['buscar']);
       }else{
         $conexao = new Servico();
         $servico = $conexao->Listar();
      }

      


      echo "<table style='width:50%' border id='tables'>";
      echo"<tr>
       <th>id </th>
      <th>Nome </th>
      <th>preco</th>
      <th>descricao</th>
      <th>imagem </th>
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($servico as $Servico) {


                echo"<tr>
                <td> ". $Servico ['id']." </td>
                <td> ". $Servico['nome']." </td>
                <td> ". $Servico['preco']." </td>
                <td> ". $Servico['descricao']." </td>
                <td><img src= '../img/".$Servico['imagem']."'/>".$Servico['imagem']."</td>
                 <td><a href='../html/editar_servico.php?id=".$Servico['id']."&nome=".$Servico['nome'].
                 "&preco=".$Servico['preco']."&descricao=".$Servico['descricao']."&imagem=".$Servico['imagem']."'>Editar</a></td>
                 <td><a href='../html/apagar_servico.php?id=".$Servico['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
    
        ?>
        <br><br> <br><br> <br><br>
        </div>
 <?php
    include_once "rodape.php";
?>
