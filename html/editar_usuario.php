<!DOCTYPE HTML>
<html>
    <head>
        <title>Editar de Usuário</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Editar Usuário</h1>
        <form action="editar_usuariook.php" method="post"> 
            <label>id</label><input type="text" name="id"  value = <?php echo $_GET['id']?>></br>
            <label>Nome</label> <input type="text" name="nome" value = <?php echo $_GET['nome']?>></br>
            <label>E-mail</label> <input type="email" name="email" value = <?php echo $_GET['email']?>></br>
            <label>Celular</label> <input type="text" name="celular" value = <?php echo $_GET['celular']?>></br>
            <label>Telefone</label> <input type="text" name="telefone" value = <?php echo $_GET['telefone']?>></br>
            <label>Datanasc</label> <input type="text" name="datanasc" value = <?php echo $_GET['datanasc']?>></br>
            <label>Tipo</label> <input type="text" name="tipo" value = <?php echo $_GET['tipo']?>></br>
            <label>Senha</label> <input type="password" name="senha" value = <?php echo $_GET['senha']?>></br>

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
