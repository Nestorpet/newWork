<?php
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
// echo $title . "<br>". $content . "<br>" .$author ."<br>";
$mysqly = new mysqli("localhost", "root", "", "work");
$mysqly->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title','$content','$author')");
echo "Статья добавлена";
header("Location: ../articles.php");