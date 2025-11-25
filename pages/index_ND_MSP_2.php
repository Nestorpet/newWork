<?php
$id = $_GET['id'];
 $mysqli= new mysqli("localhost", "root", "", "website");
            $nameRow = $mysqli->query("SELECT `shortND` FROM `ND_All` WHERE `id`='$id'");
            $nameArr = $nameRow->fetch_assoc();
            $nameList = $nameArr['shortND'];
            $result =$mysqli->query("SELECT * FROM `ND_Doc` WHERE `groupND`= $id");
                $a = $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МПТ</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/brand_01.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../style/style.css"/>
    <link rel="stylesheet" href="../style/style1.css"/>  
</head>
<body>

  <!-- Верхние крошки -->
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
                                <div class="link-bread"><a href="index_ND.php">/ Нормативные документы/ </a></div>
                                <div class="mytext"> <?php echo $nameList;?></div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
          
          <div class="col text-end me-3">
            <a href="formND.php?id=<?php echo $id?>"><button type="button" class="mybtn" >Добавить документ</button></a>
          </div>
      </div>
    </div>

    <div class="cont_ND_MSP">
        <?php
            for($i=0; $i<$a;$i++){
            $row = $result->fetch_assoc();
        ?>
                <div class="container ND_card">
                    <div>
                        <h5 class="ND_card_name"><?php echo  $row['titleND']?></h5>
                        <p class="ND_card_zac"><?php echo  $row['sortND']?></p>
                        <div>
                            <div class="container text-center">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <!-- <div class="ND_card_link"><a  href=<?php echo $row['readND']?> target="_blank">Читать документ</a></div> -->
                                        <?php 
                                            if ($row['readND']){
                                                $note1="Читать документ";
                                            }else{
                                                $note1="";
                                            }
                                        ?>
                                        
                                        <div class="ND_card_link"><a  href=<?= $row['readND']?> target="_blank"><?=$note1?></a></div>
                                    </div>
                                    <div class="col">
                                        <?php 
                                            if ($row['loadND']){
                                                $note2="Скачать документ";
                                            }else{
                                                $note2="";
                                        }?>
                                    

                                        <div class="ND_card_link"><a href=<?= $row['loadND']?>><?=$note2?></a></div>
                                    </div>
                                    <div class="col">
                                         <?php 
                                         if ($row['linkND']){
                                            $note3="Смотреть документ в Консультанте";
                                         }else{
                                             $note3="";
                                         }
                                         ?>
                                        <div class="ND_card_link"><a  href=<?= $row['linkND']?> target="_blank"><?=$note3?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php } ?>
    </div>
  

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

    <script src="assets/js/script.js"></script>

   
  </body>
</html>