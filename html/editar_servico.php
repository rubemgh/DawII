<?php 
    include_once "topo.php";
?>
 <div class="divposicao">
        <title>Editar de Serviço</title>
        <meta charset="utf-8">
    </head>
  
        <h1 style="background-color:black;color:#F2CD13;">Editar Serviço</h1>
        <form action="editar_servicook.php" method="post" style="border:2px solid black;background-color:#F2CD13;"> 
            <label>id</label><input type="text" name="id"  value = <?php echo $_GET['id']?>></br>
            <label>Nome</label> <input type="text" name="nome" value = <?php echo $_GET['nome']?>></br>
            <label>preco</label> <input type="preco" name="preco" value = <?php echo $_GET['preco']?>></br>
            <label>descricao</label> <input type="text" name="descricao" value = <?php echo $_GET['descricao']?>></br>
            <label>Imagem</label> <input type="text" name="imagem" value = <?php echo $_GET['imagem']?>></br>
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
