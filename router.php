<?php
session_start();
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
}elseif($path[1]=='getArticles'  && $method=='GET'){
    exit(ArticleController::getArticles());
}elseif($path[1]=='addArticle' && $method=='GET'){
     $content = file_get_contents('view/addArticle.html');
}elseif($path[1]=='article' && $method=='POST'){
    exit(ArticleController::getArticleById());
}elseif($path[1]=='addArticle' && $method=='POST'){
    ArticleController::addArticle();
}elseif($path[1]=='deleteArticle'){
    ArticleController::deleteArticle();
}elseif($path[1]=='addComment'){
    ArticleController::addComment();
}elseif($path[1]=='getCommentByArticalId'){
    ArticleController::getCommentByArticalId($_POST['article_id']);
}else{
    $content = "Страница не найдена 404";
}

require_once('template.php');