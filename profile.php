<?php
require_once('header.php');
$name = $_SESSION['name'];
$lastname=$_SESSION['lastname'];
$img = $_SESSION['img'];
?>

    
    <div class="container text-center mt-4">
        <div class="row">
            <div class="col-3">
            <img src="<?= $img ?>" alt="foto" style="width: 100%;">
            <form action="php/handlerUserAvatar.php" method="post" enctype="multipart/form-data">
                <input type="file" name="userFile"><input type="submit" value="Загрузить">
            </form>
            </div>
            <div class="col-9">
            <?= "Name:" .$name."<br>" ?>
            <?= "LastName: ". $lastname ?>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>