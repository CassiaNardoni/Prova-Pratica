<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>Lista de usuarios</title>
  </head>
  <body>
    <div class="cabecalho">
      LISTA DE CLIENTES
      <p>Aqui se encontra o registro de todos os clientes cadastrados no banco de dados, para deletar algum, retorna para PAGINA INICIAL e use a opção de consulta e em seguida utiliza a opção DELETAR</p>
    </div>
    <div class="div-table">
      <table border ="1" id="customers">
        <thread>
          <th>Nome</th><th>Apelido</th><th>Telefone</th><th>E-mail</th>
        </thread>
        <tbody>
          <?php
          require_once "conexao.php";

          $sql = "SELECT * FROM cliente";

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
    <a href="./index.php">Pagina Inicial</a>
    <a href="./listar.php">> Listar </a>
  </body>
</html>
