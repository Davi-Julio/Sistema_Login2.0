<?php

include_once "Model/config.php";


// Validação BackEnd para Confeirir se Usúario Existe No banco de Dados casi Exsista ele não podera fazer o cadastro

if (isset($_GET['cadastro'])) {
  $nomeCadastro = $_GET['nomeCadastro'];
  $EmailCadastro = $_GET['emailCadastro'];
  $passwordCadastro = $_GET['passwordCadastro'];
  $ConfirmpasswordCadastro = $_GET['ConfirmpasswordCadastro'];

  $sql = "SELECT * FROM users WHERE name = :nome OR email = :email OR password = :password OR ConfirmPassword = :ConfirmPassword";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':nome', $nomeCadastro, PDO::PARAM_STR);
  $stmt->bindParam(':email', $EmailCadastro, PDO::PARAM_STR);
  $stmt->bindParam(':password', $passwordCadastro, PDO::PARAM_STR);
  $stmt->bindParam(':ConfirmPassword', $ConfirmpasswordCadastro, PDO::PARAM_STR);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      echo "Usúario Já Existe";
  } else if ($passwordCadastro === $ConfirmpasswordCadastro) {
      $sql = $pdo->prepare("INSERT INTO users (name, email, password, ConfirmPassword) VALUES (?, ?, ?, ?)");
      $sql->execute(array($nomeCadastro, $EmailCadastro, $passwordCadastro, $ConfirmpasswordCadastro));
      echo 'Cadastro Feito Com Sucesso';
  } else {
      echo 'As Senhas Não Conferem!';
  }
}


//Validação Login

if (isset($_POST['login'])) {
    $nomeLogin = $_POST['nomeLogin'];
    $passwordLogin = $_POST['passwordLogin'];

    $sql = "SELECT * FROM users WHERE name = :nameLogin AND password = :passwordLogin";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nameLogin', $nomeLogin, PDO::PARAM_STR);
    $stmt->bindParam(':passwordLogin', $passwordLogin, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Redirecionamento usando JavaScript após o PHP ter concluído a execução
        echo "<script>window.location.href='sucessLogin.php';</script>";
        exit();
    } else {
        echo "Usuário ou Senha Inválida";
    }
}


//Exibir Usúarios Na Tela

$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


// Deletar usúario

if (isset($_GET['delete'])){
  $id = $_GET['delete'];
  $pdo->exec("DELETE FROM users WHERE id = $id");
}

?>