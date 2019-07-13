<?php 
    include_once "topo.php";
?>
  
<div class="divposicao">
        <title>Cadastro de Usuário</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1 style="background-color:black;color:#F2CD13;">Cadastro de Categoria</h1>
        <form action="inserir_categoriaok.php" method="post" style="border:2px solid black;background-color:#F2CD13;">
            <label>Nome</label> <input type="text" name="nome"></br>
        

            <input type="submit" value="Cadastrar">
         <?php 
         /*if($_GET['add']){
             echo"<h2>Usuario Inserido</h2>";
         }*/
        ?>
        
        </form>
        </div>
    </body>
</html>
<?php
    include_once "rodape.php";
?>