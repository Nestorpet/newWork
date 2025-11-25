  <?php
    //require_once 'header.php';
    session_start();

    $userId=$_SESSION['id'];

    $mysqly = new mysqli("localhost", "root", "", "work");
    $id = $_GET['id'];
    $result =$mysqly -> query("SELECT * FROM `articles` WHERE id=$id");
    $row=$result->fetch_assoc();
    $author=$row['author'];
    $comment = $mysqly->query("SELECT comments.comment, users.name, users.lastname FROM `comments`, `users` WHERE article_id = $id AND comments.user_id=users.id");
    $result1 = $mysqly->query("SELECT `email` FROM `users` WHERE id=$author");
    $user=$result1->fetch_assoc();
   ?>
   <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="style/style.css">
            <link rel="stylesheet" href="style/style1.css">
            <script src="script/script.js"></script>
        </head>
        <body>


    <div class="container my-3">
        <h2 class="text-center mb-3"><?=$row['title']?></h2>
        <div style="text-align: justify;" ><?=$row['content']?></div>
        <div class="row" >
          <div class="col-6 mt-3 text-start" style="font-weight: bolder;" ><?=$user['email']?></div>
          <div class="col-6 mt-3 text-end">
            <a href="updateArticle.php?id=<?=$row['id']?>">[Редактировать]</a>
            <a class="ms-3" href="php/handlerDeleteArticle.php?id=<?=$row['id']?>">[Удалить статью]</a>
            <!-- <a class="ms-3" href="addComment.php?id=<?=$row['id']?>">[Коментировать]</a> -->
          </div>
        </div>
        <form action="/php/handlerAddComment.php" method="post" class="my-4">
            <input type="hidden" name="user_id" value="<?= $userId ?>">
            <input type="hidden" name="article_id" value="<?= $id ?>">
            <div class="mb-3">
                <textarea name="comment" class="form-control" placeholder="Комментарий"></textarea>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>

        <?php while (($row=$comment->fetch_assoc())!=null):?>
          <div class="my-3">
            <p>Пользователь: <?=$row['name']." ".$row['lastname']?></p>
            <p><?=$row['comment']?></p>

          </div>
          

        <?php endwhile; ?>
        
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>