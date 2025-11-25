
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/style1.css">
        <script src="https://kit.fontawesome.com/68c56a4872.js" crossorigin="anonymous"></script>
        <script src="script/script.js"></script>
  </head>
  <body>
    <div class="container my-5" >
      <h1 class="text-center mptfont">Добавить группу документов</h1>
        <div class="col-5 mx-auto" >
            <form action="../php/handlerAddND.php" method="post">
                <div class="mb-3"><input type="text" class="form-control" required name="nameND" placeholder="Название группы документов">
                </div>
                
                <div class="mb-3"><input type="text" required class="form-control" name="linkPic" placeholder="Ссылка на картинку">
                </div>
                    <div class="container text-center">
                        <div class="row">
                          <div class="col">
                            <div class="mb-3"><input type="submit" class="btn btn-primary"></div>
                          </div>
                          <div class="col">
                            <a href="index_ND.php"><input class="btn btn-primary" value=" Отмена "></a>
                          </div>
                          
                        </div>
                      </div>
                <!-- <div class="mb-3"><input type="submit" class="btn btn-primary"></div> -->
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>