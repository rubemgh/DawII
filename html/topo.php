 <?php
  session_start();

  if(!isset($_SESSION['loginADM'])){
      header("Location:../html/login.php");
  }
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Barbearia</title>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/templatebarbearia.css">


</head>

<body>
<!--************************ Empieza el Contenido************* -->


<!--<p>Bienvenido</p>-->


        <div class="container col-12">
        <div class="row borde1" style=" height: 90px;">
            <div ><img  src="../img/barber.jpg" width=120 height=80 ></div>
        </div>
        </div>
   
         
          <nav >  
            <div class="divtamanho">
            <ul>
                <li><a href="#">Usuario</a><ul>
                    <li><a href="inserir_usuario.php" >inserir</a></li>
                    <li><a href="listar_usuario.php">Listar</a></li>
                  
                </ul></li>
                <li><a href="#">Categoria</a><ul>
                    <li><a href="inserir_categoria.php">Inserir</a></li>
                    <li><a href="listar_categoria.php">Listar</a></li>
             </ul></li>
                <li><a href="#">Servicio</a><ul>
                    <li><a href="inserir_servico.php">Inserir</a></li>
                    <li><a href="listar_servico.php">Listar</a></li>
                 </ul></li>
                 <li><a href="#">Funcionario</a><ul>
                    <li><a href="inserir_funcionario.php">Inserir</a></li>
                    <li><a href="listar_funcionario.php">Listar</a></li>
                 </ul></li>
                 <li><a href="#">Vendas</a><ul>
                    <li><a href="inserir_vendas.php">Inserir</a></li>
                    <li><a href="listar_vendas.php">Listar</a></li>
                 </ul></li>
                 <li><a href="#">Vendas_Func_Serv</a><ul>
                    <li><a href="inserir_venda_func_serv.php">Inserir</a></li>
                    <li><a href="listar_venda_func_serv.php">Listar</a></li>
                 </ul></li>
                 <li><a href="sair.php">Sair</a></li>
               
               
            </ul> 
          </div>
        </nav>




