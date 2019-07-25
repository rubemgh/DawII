<?php
 session_start();
 include  "../pdo/Usuario.class.php";
 
 
 $usuario = new Usuario();
 $sha256 = hash('sha256',$_POST["senha"]);
  $usuario->email = $_POST["email"];
   $usuario->senha = $sha256;
  
   
   
   $login = $usuario->login($usuario);
   //var_dump($login);
   if($login){
   $_SESSION['loginADM'] = true;
	   header("Location: ../html/listar_categoria.php");
   }
   else
     //echo "Não logado";
     header("Location:login.php?ERRO=senha");
     
   
   ?>