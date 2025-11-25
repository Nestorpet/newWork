<?php
//var_dump($_POST);
$userId = $_POST['user_id'];
$articleId = $_POST['article_id'];
$comment = $_POST['comment'];
$mysqli = new mysqli("localhost", "root", "", "work");
$mysqli->query("INSERT INTO `comments`(`user_id`, `article_id`, `comment`) VALUES ('$userId', '$articleId', '$comment')");
header("Location: /article.php?id=$articleId");