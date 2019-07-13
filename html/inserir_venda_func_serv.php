<?php 
    include_once "topo.php";
?>
       <style>
     .divtamanho1{
        height:1800px;   
        }
        </Style>
        <div class="divposicao">
        <h1 style="background-color:black;color:#F2CD13;">Cadastro de Venda_func_Serv</h1>
        
        <form action="inserir_venda_func_servok.php" method="post" style="border:2px solid black;background-color:#F2CD13;">
            <label>Quantidade</label> <input type="text" name="quantidade"></br>
            <label>Id_Vendas</label> <input type="text" name="id_vendas"></br>
            <label>Id_Funcionario</label> <input type="text" name="id_funcionario"></br>
            <label>Id_Serv</label> <input type="text" name="id_serv"></br>
            <label>Valor</label> <input type="text" name="Valor"></br>
           

            <input type="submit" value="Cadastrar">
         <?php 
         /*if($_GET['add']){
             echo"<h2>Usuario Inserido</h2>";
         }*/
        ?>
        
        </form>
        </div>       
 <?php
    include_once "rodape.php";
?>




