<?php
// require_once('header.php')
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
        <h1 class="text-center my-3 mptfont">Добавить дату</h1>
        <div class="col-md-5 mx-auto">
            <form action="../php/handlerAddDate.php" method="get">

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    <input name="newDate" type="date" required class="form-control" placeholder="Введите дату">
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
    