<?php
$mysqli= new mysqli("localhost", "root", "", "website");
$id = $_GET['id'];
$result =$mysqli->query("SELECT `podvedShort` FROM `podveds`WHERE `id`='$id'");
    $row = $result->fetch_assoc();
    $podvedShort = $row['podvedShort'];
?>

<!DOCTYPE html>
    <html lang="en">
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
    <!-- Модальное окно -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Заведенные КПЭ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Конец модального окна -->   
    <div class="container" >
        <h1 class="text-center my-3 mptfont">ДОбавить КПЭ</h1>
        
            <form action="../php/handlerAddKpi.php" method="get" class="mt-3" style="border: 2px solid red;">
                <div class="my-3 text-start ms-3" >
                    <label class="form-label col-5">Краткое наименование подведа
                    <input type="text" class=" col-5 form-control" style="border: 2px solid green;" placeholder="<?= $row['podvedShort']?>">
                    </label>
                </div>
                <div class="container text-center">
                    <div class="mb-3 text-start ms-3">
                        <label class="form-label col-10" for="formGroupExampleInput">Наименование КПЭ
                            <div class="row">
                                <div class="col-10">
                                    <textarea class=" col-10 form-control" style="border: 2px solid green;" name="nameKpiPodved" id="formGroupExampleInput" placeholder="Наименование КПЭ" rows="5"></textarea>
                                </div>
                                <input type="hidden" name="idPodved" value="<?php echo $id?>">
                                <div class="col">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Посмотреть КПЭ
                                    </button>
                                </div>
                            </div>
                            
                            <div class="row mt-5">
                                <div class="col-5 text-center">
                                        <input type="submit" class="btn btn-primary my-3 px-5" value="Отправить">
                                </div>
                                <div class="col-5 text-center">
                                        <a href="../podveds/kpi.php?id=2&linkName=Показатели"><input class="btn btn-primary my-3" value="Отмена"></a>
                                </div>
                            </div>
                            
                        </label>
                    </div>
                </div>

                   
            </form>
    </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
    
    