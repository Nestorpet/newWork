
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/68c56a4872.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg containerColorWhites">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ps-3">
                <a class="nav-link active" aria-current="page" href="1index.php">Главная</a>
              </li>
              <li class="nav-item ps-3">
                <a class="nav-link" href="/articles">Статьи</a>
              </li>
               <li class="nav-item ps-3">
                <a class="nav-link" href="/profile">Профиль</a>
              </li>


            </ul>
            <?php if (array_key_exists("id",$_SESSION)):?>
            <a href="php/handlerExit.php" class="btn btn-success me-3">Выход</a>
            <?php else:?> 

            <a href="login.php" class="btn btn-success me-3">Вход</a>
            <a href="reg.php" class="btn btn-success">Регистрация</a>
            <?php endif;?>
          </div>
        </div>
      </nav>

     