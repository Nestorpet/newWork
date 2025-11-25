<?php
    //var_dump($_GET);
    $id = $_GET['id'];
    $linkName=$_GET['linkName'];
    $mysqli= new mysqli("localhost", "root", "", "website");
            $result = $mysqli->query("SELECT * FROM `podveds` WHERE `id`='$id'");
            $row = $result->fetch_assoc();
            $a = count($row);
            $namePodved = $row['podvedShort'];
            $namePolnPodved = $row['podvedOfficialFull'];

            $result1 = $mysqli->query("SELECT * FROM `KPI_list` WHERE `id_podved`='$id'");
            $row1 = $result1->fetch_assoc();
            $b = count($row);
           
            
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

    <div class="container-fluid text-center mt-3" >
        <div class="row align-items-center">
            <div class="col">
                <div class="col text-start" >
                    <div class="contRow bread text-center">
                        <div class="link-bread" ><a href="../index.html" >Главная </a></div>
                        <div class="link-bread" ><a href="../pages/indexAllPodved.php" >/ Подведы / </a></div>
                        <div class="link-bread" ><a href="../pages/indexPodved.php?id=<?=$id?>" ><?=$namePodved?> /</a></div>
                        <div class="mytext"><?=$linkName?></div>
                    </div>
                </div>
            </div>
            <div class="col text-end pe-4">
                <a href="../forms/PodvedFormKpi.php?id=<?php echo $id?>"><button type="button" class="mybtn" >Изменить</button></a>
            </div>
        </div>
    </div>




    <div class="contaner mt-4" >
          <p class="mptfont text-center mb-4"> <?php echo $namePolnPodved;?></p>
    </div>
    <div class="container text-center itemGreen">
        <div class="row">
            <div class="col-4 col-sm-4 itemRed"><a href="../forms/PodvedFormKpi.php?id=<?=$id?>"  class="link-primary" style="text-decoration: underline;">Показатели</a></div>
            <div class="col-2 col-sm-2 itemRed">.col-6 .col-sm-4</div>
            <div class="col-2 col-sm-2 itemRed">.col-6 .col-sm-4</div>
            <div class="col-2 col-sm-2 itemRed">.col-6 .col-sm-4</div>
            <div class="col-2 col-sm-2 itemRed">.col-6 .col-sm-4</div>
            
            <div class="w-100 d-none d-md-block"></div>

            <!-- <div class="col-4 col-sm-4 itemRed">.col-6_1 </div>
            <div class="col col-sm-2 itemRed">.col-6_2 </div> 
                <div class="row">
                    <div class="col itemGreen">col1</div>
                    <div class="col">col2</div>
                    <div class="col">col3</div>
                </div>
                <div class="row itemGreen">
                    <div class="col">col1</div>
                    <div class="col">col2</div>
                    <div class="col">col3</div>
                </div>
           
            

            

            <div class="w-100 d-none d-md-block"></div> -->

            <div class="col-4 col-sm-4 itemRed">.col-6_1 </div>
            <div class="row itemGreen">
                <div class="col">col1</div>
                <div class="col">col2</div>
                <div class="col">col3</div>
            </div>
            <div class="col-2 col-sm-2 itemRed">.col-6_3 </div>
            <div class="col-2 col-sm-2 itemRed">.col-6 </div>
            <div class="col-2 col-sm-2 itemRed">.col-6 </div>

            <div class="w-100 d-none d-md-block"></div>

            <div class="col-4 col-sm-4 itemRed">.col-6_1 </div>
            <div class="col-2 col-sm-2 itemRed">.col-6_2 </div>
            <div class="col-2 col-sm-2 itemRed">.col-6_3 </div>
            <div class="col-2 col-sm-2 itemRed">.col-6 </div>
            <div class="col-2 col-sm-2 itemRed">.col-6 </div>
        </div>
    </div>
</body>
</html>