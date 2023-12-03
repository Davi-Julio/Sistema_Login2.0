<?php

include_once "helper/url.php";
include_once "Model/config.php";
include_once "Controller/controller.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Home</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>/Css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  </head>

  <body>

    <header class="header">
      <figure class="img-header">
        <img src="Icons/ferrari-horse.jpg" alt="">
      </figure>
      <!--img-header-->
      <nav class="nav">
        <ol>
          <li><a href="<?=$BASE_URL?>">Home</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="<?=$BASE_URL?>cadastro.php">Faça Seu Cadastro</a></li>
          <li><a href="<?=$BASE_URL?>login.php">Login</a></li>
        </ol>
      </nav>
      <!--nav-->
    </header>
    <!--header-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

  </body>

</html>