<?php
session_start();
?>



<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5" >
      <h1 class="text-center">Добавить статью</h1>
        <div class="col-5 mx-auto" >
            <form action="php/handlerAddArticle.php" method="post">
                <div class="mb-3"><input type="text" class="form-control" name="title" placeholder="Заголовок">
                </div>
                <div class="mb-3">
                    <textarea name="content" class="form-control" placeholder="Текст статьи"></textarea>
                </div>
                <div class="mb-3"><input type="text" class="form-control" name="author" hidden value="<?= $_SESSION['id'] ?>">
                </div>
                <div class="mb-3"><input type="submit" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>