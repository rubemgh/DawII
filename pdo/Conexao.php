<?php
 Class ClassConexao{

  
      public function conectaDB(){

        $host = 'mysql:host=localhost;dbname=barbearia;charset=utf8';
        $user = 'root';
        $pass = '';
            try {
                $pdo = new PDO($host, $user, $pass);

                return $pdo;
            } catch (PDOException $ex) {
                echo 'Erro: ' . $ex->getMessage();
            }
        }


    }



?>
