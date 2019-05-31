
        <?php
       include_once '../pdo/Usuario.class.php';
       include_once '../pdo/Usuarios.php';
         $conexao = new Usuario();
         $usuario = $conexao->Listar();




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
      <th tolspan='1'>Açôes</th>
       </tr>";
       foreach ($usuario as $Usuario) {


                echo"<tr>
                <td> ". $Usuario->id." </td>
                <td> ". $Usuario->Nome." </td>
                <td> ". $Usuario->email." </td>
                <td> ". $Usuario->celular." </td>
                <td> ". $Usuario->telefone." </td>
                <td> ". $Usuario->datanasc." </td>
                <td> ". $Usuario->tipo." </td>
                <td> ". $Usuario->senha." </td>
                 <td><a href='editar.php?id=".$Usuario->id."&Nome=".$Usuario->Nome."&Email="
                 .$Usuario->email."&Celular=".$Usuario->celular."&Telefone=".$Usuario->telefone.
                 "&Datanasc=".$Usuario->datanasc."&Tipo=".$Usuario->tipo."&Senha=".$Usuario->senha."'>Editar</a></td>


                </tr>";
            }
     echo"</table>";
        ?>
