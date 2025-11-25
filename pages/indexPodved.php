<?php
$id = $_GET['id'];
 $mysqli= new mysqli("localhost", "root", "", "website");
            $result = $mysqli->query("SELECT * FROM `podveds` WHERE `id`='$id'");
            $row = $result->fetch_assoc();
            $a = count($row);
            $namePodved = $row['podvedShort'];
            $namePolnPodved = $row['podvedOfficialFull'];
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
<style>

</style>
<body>
   <div class="container-fluid text-center mt-3" >
      <div class="row align-items-center">
            <div class="col">
                <div class="row align-items-center">
                    <div class="col-11 text-start" >
                      <div class="contRow bread text-center">
                          <div class="link-bread" ><a href="../index.html" >Главная </a></div>
                          <div class="link-bread"><a href="indexAllPodved.php">/Подведы/ </a></div>
                          <div class="mytext"> <?php echo $namePodved;?></div>
                      </div>
                    </div>
                </div>
            </div>
                <?php $linkName='Показатели' ?>
            <div class="col text-end ">
              <a href="#" class="pe-3 link-bread bread">Документы</a>
              <a href="../podveds/kpi.php?id=<?php echo $row['id'] ?>&linkName=<?=$linkName?>" class="pe-3 link-bread bread">Показатели</a>
              <a href="#" class="pe-5 link-bread bread">Статистика</a>
              <a href="../forms/PodvedForm.php?id=<?php echo $id?>"><button type="button" class="mybtn" >Изменить</button></a>
            </div>
      </div>
    </div>
    

  <div class="contaner mt-4" >
      <p class="mptfont text-center mb-4"> <?php echo $namePolnPodved;?></p>
        <div class="row mt-2">
          <div class="col text-end fontPodvedName me-2">
            Краткое наименование
          </div>
          <div class="col text-start fontPodved ms-2">
            <? echo $row['podvedShort']?>
          </div>
        </div>

        <div class="row mt-2">
            <div class="col text-end fontPodvedName me-2">
                Полное наименование
            </div>
            <div class="col text-start fontPodved ms-2">
                <? echo $row['podvedOfficialFull']?>
            </div>
        </div>
  </div>




    
        
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
