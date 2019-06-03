<!--<form action="listar_usuario.php">
   Buscar:<input type="text" name="buscar"/>
 <input type="submit"/>
</form>-->


        <?php
       include_once '../pdo/Usuario.class.php';
       include_once '../pdo/Usuarios.php';
        
     /* if (isset($_POST['buscar'])){
         $conexao = new Usuario();
         $usuario = $conexao->Listarnome($_POST['buscar']);
       }else{*/
         $conexao = new Usuario();
         $usuario = $conexao->Listar();
      /* }*/

      


      echo "<table style='width:50%' border>";
      echo"<tr>
       <th>id </th>
      <th>Nome </th>
      <th>email</th>
      <th>celular </th>
      <th> telefone </th>
      <th>datanasc</th>
      <th>tipo</th>
      <th>senha</th>
      <th tolspan='2'>Açôes</th>
       </tr>";

      /* var_dump ($usuario);*/
       foreach ($usuario as $Usuario) {


                echo"<tr>
                <td> ". $Usuario ['id']." </td>
                <td> ". $Usuario['nome']." </td>
                <td> ". $Usuario['email']." </td>
                <td> ". $Usuario['celular']." </td>
                <td> ". $Usuario['telefone']." </td>
                <td> ". $Usuario['datanasc']." </td>
                <td> ". $Usuario['tipo']." </td>
                <td> ". $Usuario['senha']." </td>
                 <td><a href='../html/editar_usuario.php?id=".$Usuario['id']."&nome=".$Usuario['nome']."&email=".$Usuario['email']."&celular=".$Usuario['celular']."&telefone=".$Usuario['telefone']."
                 &datanasc=".$Usuario['datanasc']."&tipo=".$Usuario['tipo']."&senha=".$Usuario['senha']."'>Editar</a></td>
                 <td><a href='../html/apagar_usuario.php?id=".$Usuario['id']."'>Eliminar</a></td>
                

                </tr>";
            }
     echo"</table>";
   
        ?>
