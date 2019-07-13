<?php 
    include_once "topo.php";
?>
 <div class="divposicao">
        <title>Editar de Venda_Func_Serv</title>
        <meta charset="utf-8">
    </head>
  
        <h1 style="background-color:black;color:#F2CD13;">Editar Usuário</h1>
        <form action="editar_venda_func_servok.php" method="post" style="border:2px solid black;background-color:#F2CD13;"> 
            <label>id</label><input type="text" name="id"  value = <?php echo $_GET['id']?>></br>
            <label>Quantidade</label> <input type="text" name="quantidade" value = <?php echo $_GET['quantidade']?>></br>
            <label>Id_vendas</label> <input type="text" name="id_vendas" value = <?php echo $_GET['id_vendas']?>></br>
            <label>Id_funcionario</label> <input type="text" name="id_funcionario" value = <?php echo $_GET['id_funcionario']?>></br>
            <label>Id_Serv</label> <input type="text" name="id_serv" value = <?php echo $_GET['id_serv']?>></br>
            <label>Velor</label> <input type="text" name="valor" value = <?php echo $_GET['valor']?>></br>
      

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
