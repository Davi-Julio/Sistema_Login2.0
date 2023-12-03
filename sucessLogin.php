<?php

include_once "Templates/header.php";

?>


<h1>Login Feito Com Sucesso</h1>
<table id="table" class="table table-striped">

  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
  </tr>

  <?php
  foreach ($result as $user) {
  ?>
  <tr>
    <td>
      <?= $user['id'] ?>
    </td>
    <td>
      <?= $user['name'] ?>
    </td>
    <td>
      <?= $user['email'] ?>
    </td>
    <td><a href="?delete=<?=$user['id']?>"><img width="45vw" src="Icons//delete.png" alt=""></a>
      <a href="editar.php?id=<?=$user['id']?>"><img width="45vw" src="Icons//editar.png" alt=""></a>
    </td>
  </tr>
  <?php
  }
  ?>


</table>