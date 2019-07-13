<?php 
    include_once "topo.php";
?>
       <style>
     .divtamanho1{
        height:1800px;   
        }
        </Style>
        <div class="divposicao">
        <h1 style="background-color:black;color:#F2CD13;">Cadastro de Vendas</h1>
        
        <form action="inserir_vendasok.php" method="post" style="border:2px solid black;background-color:#F2CD13;">
            <label>quantidade</label> <input type="text" name="quantidade"></br>
            <label>data_venda</label> <input type="text" name="data_venda"></br>
            <label>maneira_pagar</label> <input type="text" name="maneira_pagar"></br>
            <label>valor_total</label> <input type="text" name="valor_total"></br>
          

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




