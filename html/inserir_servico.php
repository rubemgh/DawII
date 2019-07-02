<?php 
    include_once "topo.php";
?>

        <div class="divposicao">
        <h1 style="background-color:black;color:#F2CD13;">Cadastro de Servico</h1>
        
        <form action="inserir_servicook.php" method="post" style="border:2px solid black;background-color:#F2CD13;">
            <label>Nome</label> <input type="text" name="nome"></br>
            <label>preco</label> <input type="preco" name="preco"></br>
            <label>descricao</label> <input type="text" name="descricao"></br>
            <label>Imagem</label> <input type="text" name="imagem"></br>
        

            <input type="submit" value="Cadastrar">
         <?php 
         /*if($_GET['add']){
             echo"<h2>Servico Inserido</h2>";
         }*/
        ?>
        
        </form>
        </div>       
 <?php
    include_once "rodape.php";
?>

