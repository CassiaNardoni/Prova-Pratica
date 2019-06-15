<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
  </head>
  <body>
    <div class="cabecalho col-8">
      CADASTRO:
    </div>
    <div class="painel">
      <form method="POST" action="cadastro.php">
        <div>
          Cadastro de clientes:
        </div>
        <div>
          <input type="text" class="text" name="nome" placeholder="Nome">
        </div>
        <div>
          <input type="text" class="text" name="apelido" placeholder="Apelido">
        </div>
        <div>
          <input type="number" class="text" name="telefone" placeholder="Telefone">
        </div>
        <div>
          <input type="text" class="text" name="email" placeholder="E-mail">
        </div>
        <div>
          <input type="submit" class="buttom buttom-focus col-2" value="CADASTRAR">
        </div>
      </form>
    </div>
    <div class="cabecalho col-8">
      CONSULTAR CLINTES:
    </div>
    <div class="painel">
      <form method="GET" action="consultar.php">
        <div>
          Buscar:
          <input type="text" class="text" name="consulta-index" placeholder="ex: João">
          <input type="submit" class="buttom buttom-focus col-2" value="Ir">
        </div>
      </form>
      <form action="listar.php">
        <input type="submit" class="buttom buttom-focus col-2" value="Listar tudo">
      </form>
    </div>
  </body>
</html>
