<?php

include_once "Templates/header.php";

?>


<form action="" class="form2" method="post">
  <label>Faça Seu Login</label>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Name:</label>
    <input required type="text" name="nomeLogin" class="form-control" id="formGroupExampleInput"
      placeholder="Digite Seu Nome">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Password:</label>
    <input required type="text" name="passwordLogin" class="form-control" id="formGroupExampleInput2"
      placeholder="Confirm Password">
  </div>
  <button id="btn2" type="submit" name="login" class="btn btn-secondary">Login</button>
</form>
<!--form2-->