<?php
$mysqli= new mysqli("localhost", "root", "", "website");
$id = $_GET['id'];
$result =$mysqli->query("SELECT * FROM `podveds`WHERE `id`='$id'");
    $row = $result->fetch_assoc();
    $a = count($row);
    var_dump($row);
    echo "<hr>";
    echo $row['podvedShort'];
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
        
    <div class="container" style="border: 2px solid red;">
        <h1 class="text-center my-3 mptfont">Изменить информацию</h1>
        <div class="col-md-5">
            <form action="#" method="get">
                <div class="col-6 mb-3 text-start" >
                    <label class="form-label col-10">Краткое наименование</label>
                    <input type="text" class=" col-10 form-control" style="border: 2px solid green;" placeholder="<? echo $row['podvedShort']?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Полное наименование</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="<? echo $row['podvedName']?>">
                </div>

                
            </form>

        </div>
    </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
    
    