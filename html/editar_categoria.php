<!DOCTYPE HTML>
<html>
    <head>
        <title>Editar Categoria</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Editar Categoria</h1>
        <form action="editar_categoriaok.php" method="post"> 
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
    </body>
</html>
