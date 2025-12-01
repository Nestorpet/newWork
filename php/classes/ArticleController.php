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

    public static function addArticle(){
        global $mysqli;
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_SESSION['id'];
        $mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title','$content','$author')");
        header("Location: /articles");
    }

    public static function deleteArticle(){
        global $mysqli;
        $id = $_GET['id'];
        $mysqli->query("DELETE FROM `articles` WHERE id='$id'");
        $mysqli->query("DELETE FROM `comments` WHERE article_id='$id'");
        header("Location: /articles");
    }

    public static function addComment(){
        global $mysqli;
        $userId = $_SESSION['id'];
        $articleId = $_POST['article_id'];
        $comment = $_POST['comment'];
        $mysqli->query("INSERT INTO `comments`(`user_id`, `article_id`, `comment`) VALUES ('$userId', '$articleId', '$comment')");
        exit(json_encode(['result'=>'success']));
    }

    public static function getCommentByArticalId($articleId){
        global $mysqli;
        $result = $mysqli->query("SELECT comments.comment, users.name, users.lastname FROM comments, users WHERE article_id='$articleId' AND users.id=comments.user_id;");
        $comments = [];
        while (($row=$result->fetch_assoc()) !=null){
            $comments[]=$row;
        }
        exit(json_encode($comments));
       
    }
}