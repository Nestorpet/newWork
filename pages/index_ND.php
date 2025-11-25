<?php

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
              <div class="container text-center" > 
                  <div class="row align-items-center">
                    <div class="col-1 text-center" style="padding: 0;">
                        <a class="navbar-brand logo" href="https://mpt.avo.ru/" title="Перейти на сайт МПТ" > <img class="logo" src="../img/AVO.png" /></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                        </button>
                    </div>
                    <div class="col-11 text-start" >
                      <div class="contRow bread text-center">
                      <div class="link-bread" ><a href="../index.html" >Главная </a></div>
                      <div class="mytext">/ Нормативные документы</div>
                  </div>
                    </div>
                    
                  </div>
              </div>
          </div>
          
          <div class="col text-end ">
            <a href="addND.php"><button type="button" class="mybtn" >Добавить документ</button></a>
          </div>
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
          <p class="mptfont text-center mb-4">Нормативные документы</p>
            <div class="gr-cont-NormDoc">

                <?php
                    $mysqli= new mysqli("localhost", "root", "", "website");
                    $result =$mysqli->query("SELECT * FROM `ND_All`");
                    $a = $result->num_rows;
                    for($i=0; $i<$a;$i++){
                    $row = $result->fetch_assoc();
                ?>
                    <div class="gr-item-ND gr_item" id="<?php echo $row['id']  ?>">
                        <a href="index_ND_MSP_2.php?id=<?php echo $row['id']  ?>">
                            <div class="sm-card" style="background-image: url(<?php echo  $row['linkPic'] ?>);">
                                <div class="container">
                                    <div class="mx-auto p-2 border border-white card-title">
                                        <div class="card-aricle"><?php echo  $row['nameND'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                 <?php } ?>
            </div>
        </div>
        
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
