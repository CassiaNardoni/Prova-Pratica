<?php
function getConnection(){
  $databaseNome = 'root';
  $databaseSenha = '';

  $conn = new PDO('mysql:host=localhost;dbname=prova',
                  $databaseNome, $databaseSenha);
  return $conn;
}
?>
