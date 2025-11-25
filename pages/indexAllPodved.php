<?php
// echo "<link rel='stylesheet' href='style.css'>";
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
    
<div class="row align-items-center ps-3 mt-3">
    <div class="contRow bread text-center">
        <div class="link-bread" ><a href="../index.html" >Главная </a></div>
        <div class="mytext">/ Подведы</div>
    </div>
</div>
   


    
        <!-- <div class="container-fluid contRow" >
            <div> 
                <a class="navbar-brand logo" href="https://mpt.avo.ru/" title="Перейти на сайт МПТ" > <img class="logo" src="../img/AVO.png" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                </button>
            </div>
            <div class="contRow bread">
                <div class="link-bread" ><a href="../index.html" >Главная </a></div>
                <div class="mytext">/ Нормативные документы</div>
            </div>
            <div >
                <button type="button" class="mptfontbtn" ><a href="addND.php">Добавить документ</a></button>
            </div>
        </div> -->
        <!--The end of the top panel-->
        <div class="contaner cont-ND">
          <p class="mptfont text-center mb-4">Подведы</p>
            <div class="gr-cont-NormDoc mt-5 ms-5">

                <?php
                    $mysqli= new mysqli("localhost", "root", "", "website");
                    $result =$mysqli->query("SELECT * FROM `podveds`");
                    $a = $result->num_rows;
                    for($i=0; $i<$a;$i++){
                    $row = $result->fetch_assoc();
                ?>

                                        <!-- <div class="d-flex card text-center">
                                            <div class="p-2"><img src="assets/images/lizing.webp" class="card-img-top" alt="Лизинг"></div>
                                            <div class="p-2"> <h5 class="card-title">ФВЛ</h5></div>
                                            <div class="p-2">Фонд "ВладимирЛизинг"</div>
                                            <div class="mt-auto p-3"><a href="Lizing/index_f.html" class="btn btn-primary">Перейти</a></div>
                                          </div> -->

                            <!-- <div class="d-flex card text-center" style="background-image: url(<?php echo  $row['podvedImg'] ?>);">
                                <div class="container">
                                    <div class="mx-auto p-2 border border-white card-title">
                                        <div class="card-aricle"><?php echo  $row['podvedOfficialFull'] ?></div>
                                    </div>
                                </div>
                            </div> -->




                    <div class="gr-item-ND gr_item" id="<?php echo $row['id']  ?>">
                        <a href="indexPodved.php?id=<?php echo $row['id']  ?>">
                            <div class="d-flex card text-center">
                                <div class="p-2"><img src="<?php echo  $row['podvedImg'] ?>" class="card-img-top"></div>
                                <div class="p-2"> <h4><?php echo  $row['podvedShort'] ?></h4></div>
                                <div class="p-2"><?php echo  $row['podvedName'] ?></div>
                                
                            </div>
                        </a>
                    </div>
                 <?php } ?>
            </div>
        </div>
        
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
