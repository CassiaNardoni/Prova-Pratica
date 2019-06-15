<?php
require_once "conexao.php";

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $telefone = (int) $_POST['telefone'];
    $email = $_POST['email'];

    if(empty($nome)){ //funcao !isset verificada se essa variavel esta preenchida
      die ("Nome obrigatorio"); //encerra o processo
    }
    if(empty($apelido)){ //funcao !isset verificada se essa variavel esta preenchida
      die ("Nome obrigatorio"); //encerra o processo
    }
    if(empty($telefone)){ //funcao !isset verificada se essa variavel esta preenchida
      die ("Nome obrigatorio"); //encerra o processo
    }
    if(empty($email)){ //funcao !isset verificada se essa variavel esta preenchida
      die ("Nome obrigatorio"); //encerra o processo
    }

    try{
      $sql = "INSERT INTO cliente(nome, apelido, telefone, email) VALUES (:nome, :apelido, :telefone, :email)" ;
      $stmt = getConnection()->prepare($sql);
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':apelido', $apelido);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->bindParam(':email', $email);
      if($stmt->execute()){
        echo "Tudo certo";
      }
      else{
        echo "falhou";
      }
    }catch(PDOException $e) {
      echo 'Erro: ' . $e->getMessage();
    }
?>
