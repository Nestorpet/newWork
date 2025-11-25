<?php
$id = $_GET['id'];
//echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/68c56a4872.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <h1 class="text-center my-3 ">Нормативные документы</h1>
        <div class="col-md-12 mx-auto">
            <form action="../php/handlerAddDoc.php" method="POST"  enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><i class="fa-regular fa-newspaper"></i> Название документа</label>
                    <textarea name="titleND" required class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-newspaper"></i></span>
                    <input name = "sortND" type="text" required class="form-control" placeholder="Вид документа">
                </div>
 
                <div class="form-check mt-3 ">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Документ есть в Консультанте
                    </label>
                    </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Документа нет в Консультанте
                    </label>
                </div >
                <script>
                    // let RadioKons = document.getElementById('hidenLink').style.display;
                    //  alert(RadioKons);
 
                    // console.log(document.getElementById('flexRadioDefault1').checked);
                    // console.log(document.getElementById('flexRadioDefault2').checked);
                    flexRadioDefault1.onclick = function() {
                        document.getElementById('hidenLink').style.display = "";
                        }
 
                    flexRadioDefault2.onclick = function() {
                        document.getElementById('hidenLink').style.display = "none";
                    
                        }
                    //     if(document.getElementById('flexRadioDefault1').checked) {
                    //     window.alert("Yes");  
                    //     }else if(document.getElementById('flexRadioDefault1').checked) {
                    //     window.alert("No");  
                    //     }
                    // //let RadioKons = document.getElementById('flexRadioDefault2');
                   
                </script>
                <div class="input-group mb-3" id="hidenLink" style="display:none;">
                    <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
                    <input name = "linkND" id="LinkNd" type="url" class="form-control"  placeholder="Ссылка на документ в Консультанте">
                </div>

                 <div class="input-group mb-3">
                    <label class="input-group-text" for="userFile">Файл в pdf</label>
                     <input type="file" class="form-control" value="" name="userFile">
                </div>
                 <div class="input-group mb-3">
                    <label class="input-group-text" for="userFileWord">Файл в word</label>
                     <input type="file" class="form-control" value="" name="userFileWord">
                </div>
               
               
                
                <!-- <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                    <select class="form-select" name="groupND" aria-label="Default select example">
                        <option selected >Группа документов</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                         <option value="4">Four</option>
                    </select>
                </div> -->
                <input type="hidden" name="groupND" value="<?php echo $id?>">
                <div class="mb-3">
 
                    <input type="submit" class=" form-control btn btn-primary">
                </div>
            </form>
            
 
        </div>
    </div>
 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

 
