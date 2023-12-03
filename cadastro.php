<?php

include_once 'Templates/header.php';

?>


<form class="form" action="" method="get">
  <label>Faça Seu Casdastro!</label>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Name:</label>
    <input required type="text" name="nomeCadastro" class="form-control" id="formGroupExampleInput"
      placeholder="Digite Seu Nome">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Email:</label>
    <input required type="email" name="emailCadastro" class="form-control" id="formGroupExampleInput2"
      placeholder="Digite Seu Email">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Password:</label>
    <input required type="password" name="passwordCadastro" class="form-control" id="formGroupExampleInput2"
      placeholder="Digite Sua Senha">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Confirm Password:</label>
    <input required type="password" name="ConfirmpasswordCadastro" class="form-control" id="formGroupExampleInput2"
      placeholder="Confirme Sua Senha">
  </div>
  <button id="btn" name="cadastro" type="submit" class="btn btn-dark">Cadastrar</button>

</form>
<!--form-->