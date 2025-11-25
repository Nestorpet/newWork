<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="//style/style1.css">
        <script src="https://kit.fontawesome.com/68c56a4872.js" crossorigin="anonymous"></script>
        <script src="script/script.js"></script>
</head>
<body>
    <?php
         $mysqli= new mysqli("localhost", "root", "", "website");
         $resultPodv = $mysqli->query("SELECT `id`, `podvedShort` FROM `podveds`");
         $a = $resultPodv->num_rows;  
    ?>
    
   
    
      <div class="container my-3">
        <h1 class="text-center my-3 mptfont">Добавить КПЭ</h1>
        <div class="col-md-5 mx-auto">
            <form action="../php/handlerNameKpi.php" method="get">

                <div class="mb-3">
                    <select class="form-select" name="Podved" aria-label="Podved">
                    <option selected>Выбрать подвед</option>
                    <?php for($i=0; $i<$a;$i++){
                    $row = $resultPodv->fetch_assoc();
                    ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['podvedShort'] ?></option>
                    <?php } ?>
                    </select>
                </div>
                 <div class="mb-3">
                    <textarea name="nameKpi" class="form-control" rows="5" placeholder="КПЭ"></textarea>
                </div>
                
                <div class="mb-3">

                            <input type="submit" class=" form-control mybtn">
                </div>
            </form>
        </div>
    </div>

   

    
       
   

        
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>