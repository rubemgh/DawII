<!DOCTYPE HTML>
<html>
    <head>
        <title>Cadastro de Usuário</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Cadastro de Usuário</h1>
        <form action="inserir_usuariook.php" method="post">
            <label>Nome</label> <input type="text" name="nome"></br>
            <label>E-mail</label> <input type="email" name="email"></br>
            <label>Celular</label> <input type="text" name="celular"></br>
            <label>Telefone</label> <input type="text" name="telefone"></br>
            <label>Datanasc</label> <input type="text" name="datanasc"></br>
            <label>Tipo</label> <input type="text" name="tipo"></br>
            <label>Senha</label> <input type="text" name="senha"></br>

            <input type="submit" value="Cadastrar">
         <?php 
         if($_GET['add']){
             echo"<h2>Usuario Inserido</h2>";
         }
        ?>
        
        </form>
    </body>
</html>