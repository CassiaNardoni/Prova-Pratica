<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>Lista de usuarios</title>
  </head>
  <body>
    <div class="div-table">
      <table border ="1" id="customers">
        <thread>
          <th>Nome</th><th>Apelido</th><th>Telefone</th><th>E-mail</th>
        </thread>
        <tbody>
          <?php
          require_once "conexao.php";

          $consulta = $_GET['consulta-index'];

          $sql = "SELECT * FROM cliente WHERE nome='$consulta'";

          foreach(getConnection()->query($sql) as $row){
            echo "<tr>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['apelido']."</td>";
            echo "<td>".$row['telefone']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="painel">
      Confirme o e-mail para excluir:
      <form method="POST" action="excluir.php">
        <input type="text" class="text" name="email">
        <input type="submit" class="buttom buttom-focus" value="DELETAR">
      </form>
    </div>
    <a href="./index.php">Pagina Inicial</a>
    <a href="./consultar.php">> Consultar</a>
  </body>
</html>
