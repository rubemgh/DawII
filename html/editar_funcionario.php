<?php 
    include_once "topo.php";
?>
<div class="divposicao">
        <title>Editar Categoria</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1 style="background-color:black;color:#F2CD13;">Editar Funcionario</h1>
        <form action="editar_funcionariook.php" method="post" style="border:2px solid black;background-color:#F2CD13;"> 
            <label>id</label><input type="text" name="id"  value = <?php echo $_GET['id']?>></br>
            <label>Nome</label> <input type="text" name="nome" value = <?php echo $_GET['nome']?>></br>
           

            <input type="submit" value="editar">
         <?php
         /*
         if($_GET['add']){
             echo"<h2>Usuario Editado</h2>";
         }*/
         ?>
      
        
        </form>
        </div>
    </body>
</html>
<?php
    include_once "rodape.php";
?>