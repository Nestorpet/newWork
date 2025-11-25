<?php
class ArticleController{
    public static function getArticles(){
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM articles");
        $articles=[];
        while (($row = $result->fetch_assoc()) != null){
            $articles[]=$row;
        }
        return json_encode($articles);
    }

    public static function getArticleById(){
        global $mysqli;
        $articleId = $_POST['article_id'];
        $result =$mysqli->query("SELECT * FROM `articles`,`users` WHERE articles.id='$articleId' and users.id=articles.author;");
        $row = $result->fetch_assoc();
        return json_encode($row);

    }
}