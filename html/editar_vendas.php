<?php 
    include_once "topo.php";
?>
 <div class="divposicao">
 <title>Editar de Vendas</title>
        <meta charset="utf-8">
    </head>
  
       <h1 style="background-color:black;color:#F2CD13;">Editar Vendas</h1>
        <form action="editar_vendasok.php" method="post" style="border:2px solid black;background-color:#F2CD13;"> 
            <label>id</label><input type="text" name="id"  value = <?php echo $_GET['id']?>></br>
            <label>Quantidade</label> <input type="text" name="quantidade" value = <?php echo $_GET['quantidade']?>></br>
            <label>Data_venda</label> <input type="data_venda" name="edata_venda" value = <?php echo $_GET['data_venda']?>></br>
            <label>Meneira_pagar</label> <input type="text" name="maneira_pagar" value = <?php echo $_GET['maneira_pagar']?>></br>
            <label>Valor_Total</label> <input type="text" name="valor_total" value = <?php echo $_GET['valor_total']?>></br>
          

            <input type="submit" value="editar">
         <?php
         /*
         if($_GET['add']){
             echo"<h2>Usuario Editado</h2>";
         }*/
         ?>
      
        
        </form>
        </div>
<?php
    include_once "rodape.php";
?>
