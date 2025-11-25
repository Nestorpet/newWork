<?php
$path = explode("/",$_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$mysqli= new mysqli("localhost", "root", "", "work");
require_once('php/classes/ArticleController.php');
if($path[1]=="login"){
    $content =  file_get_contents('view/login.php');
}elseif($path[1]=="reg"){
    $content = file_get_contents('view/reg.php');
}elseif($path[1]=='articles'){
    $content = file_get_contents('view/articles.html');
}elseif($path[1]=='profile'){
    $content = file_get_contents('view/profile.html');
}elseif($path[1]=='article' && $method=='GET'){
    $content = file_get_contents('view/article.html');
}elseif($path[1]=='getArticles'){
    exit(ArticleController::getArticles());
}elseif($path[1]=='article' && $method=='POST'){
    exit(ArticleController::getArticleById());
}else{
    $content = "Страница не найдена 404";
}

require_once('template.php');