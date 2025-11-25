<?php
require_once('header.php');
?>




<div class="container my-3">


<?php
$mysqli= new mysqli("localhost", "root", "", "work");
$result = $mysqli->query("SELECT * FROM articles");
// Получаем ответ от БД в виде ассоциативного массива
    while (($row = $result->fetch_assoc())!== null){
        $title = $row['title'];
        $id = $row['id'];
        echo "<div class = 'my-5'>
            <h4><a href='article.php?id=$id'>$title</a></h4>
        </div>";
    }
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>