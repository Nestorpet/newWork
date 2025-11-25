<?php
require_once('header.php')
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/style1.css">
        <script src="https://kit.fontawesome.com/68c56a4872.js" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    </head>
    <body>
        
   <div class="container my-3">
        <h1 class="text-center mt-5 mb-3">Регистрация</h1>
        <div class="col-md-5 mx-auto">
            <form action="php/handlerReg.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input name = "name" type="text" required class="form-control" placeholder="Имя">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input name = "lastname" type="text" required class="form-control" placeholder="Фамилия">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    <input name = "email" type="email" required class="form-control" placeholder="email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input name="pass" type="password" required class="form-control" placeholder="Пароль">
                </div>
                <div class="mb-3">

                    <input type="submit" class=" form-control btn btn-primary">
                </div>
            </form>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
    