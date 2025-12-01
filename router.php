<?php
session_start();
$path = explode("/",$_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$mysqli= new mysqli("localhost", "root", "", "work");
require_once('php/classes/ArticleController.php');
require_once('php/classes/UserController.php');

if($path[1]=="login" && $method=='GET'){
    $content =  file_get_contents('view/login.html');
}elseif($path[1]=='login' && $method=='POST'){
    exit(UserController::login());

}elseif($path[1]=="reg" && $method=='GET'){
    $content = file_get_contents('view/reg.html');
}elseif($path[1]=='reg' && $method=='POST'){
    UserController::reg();

}elseif($path[1]=='articles'){
    $content = file_get_contents('view/articles.html');
}elseif($path[1]=='profile' && $method=='GET'){
    $content = file_get_contents('view/profile.html');
}elseif($path[1]=='getAuthUserData'){
    exit(UserController::getAuthUserData());
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
}elseif($path[1]=='updateUserAvatar'){
    UserController::updateUserAvatar();
}else{
    $content = "Страница не найдена 404";
}

require_once('template.php');