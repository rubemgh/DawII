<?php 
    include_once "topo.php";
?>

        <div class="divposicao">
        <h1 style="background-color:black;color:#F2CD13;">Cadastro de Usuário</h1>
        
        <form action="inserir_usuariook.php" method="post" style="border:2px solid black;background-color:#F2CD13;">
            <label>Nome</label> <input type="text" name="nome"></br>
            <label>E-mail</label> <input type="email" name="email"></br>
            <label>Celular</label> <input type="text" name="celular"></br>
            <label>Telefone</label> <input type="text" name="telefone"></br>
            <label>Datanasc</label> <input type="text" name="datanasc"></br>
            <label>Tipo</label> <input type="text" name="tipo"></br>
            <label>Senha</label> <input type="password" name="senha"></br>

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











      