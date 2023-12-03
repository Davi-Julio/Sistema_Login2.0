<?php

include_once "Templates/header.php";


if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
  $sql->bindParam(":id", $id);
  $sql->execute();
  $user = $sql->fetch(PDO::FETCH_ASSOC);


  if ($user) {
?>
<form class="form" action="" method="post">
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Name:</label>
    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
    <input required type="text" name="nome" value="<?php echo $user['name'] ?>" class="form-control"
      id="formGroupExampleInput" placeholder="Digite Seu Nome">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Email:</label>
    <input required type="email" name="email" value="<?php echo $user['email'] ?>" class="form-control"
      id="formGroupExampleInput2" placeholder="Digite Seu Email">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Password:</label>
    <input required type="password" name="password" value="<?php echo $user['password'] ?>" class="form-control"
      id="formGroupExampleInput2" placeholder="Digite Sua Senha">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Confirm Password:</label>
    <input required type="password" name="ConfirmPassword" value="<?php echo $user['ConfirmPassword'] ?>"
      class="form-control" id="formGroupExampleInput2" placeholder="Comfirmer Sua senha">
  </div>
  <button type="submit" class="btn btn-dark">Update</button>
</form>
<!--form-->

<?php
  } else {
    echo "user Not Found";
  }
} else {
  echo "User Not Selecte";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $ConfirmPassword = $_POST['ConfirmPassword'];

  if ($password === $ConfirmPassword) {
    $sql = $pdo->prepare("UPDATE users SET name = :name, email = :email, password = :password , ConfirmPassword = :comfirmpassword WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->bindParam(':name', $nome);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':password', $password);
    $sql->bindParam(':comfirmpassword', $ConfirmPassword);

    try {
      $sql->execute();
      header("Location: sucessLogin.php");
    } catch (PDOException $e) {
      echo "Erro ao atulizar o usuário";
    }
  } else {
    echo "Senhas Diferentes";
  }
}

?>