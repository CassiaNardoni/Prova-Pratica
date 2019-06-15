<?php
  require_once "conexao.php";

  $email = $_POST['email'];

  $sql = "DELETE FROM cliente WHERE email = '$email'";
  $stmt = getConnection()->prepare($sql);
  if($stmt->execute()){
    echo "Sucesso";
  }
  else{
    echo "Falha";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultado</title>
  </head>
  <body>
    <a href="./index.php">Pagina Inicial</a>;
  </body>
</html>
