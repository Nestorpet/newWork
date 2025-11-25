<?php
session_start();
$title = addslashes($_POST['title']);
$content = addslashes($_POST['content']);
$author = $_POST['author'];
$id = $_POST['id'];
$mysqli = new mysqli("localhost", "root", "", "work");
$mysqli->query("UPDATE `articles` SET `title`='$title',`content`='$content',`author`='$author' WHERE id='$id'");
header("Location: /article.php?id=$id");