<?php
session_start();
$path = explode("/",$_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$mysqli= new mysqli("localhost", "root", "", "work");
require_once('php/classes/ArticleController.php');
require_once('php/classes/UserController.php');
require_once('php/classes/simple_html_dom.php');


/*временный блок для работы с сайтом banki.ru*/ 
if($path[1]=='banki'){
    $html=file_get_html('https://ofd.nalog.ru/statistics.html?statDate=&level=0&fo=1&ssrf=33');
    $MyArr=[];
    
    $lev2= $html->find('.level-2',0);
    $headLev2=$lev2->find('th',0);
   
    echo  $headLev2." | ";
   
    foreach($lev2->find('td') as $td){
        $MyArr[]= $td->plaintext;
      
        echo $td->plaintext." | ";
       
    }

    echo "<hr>";
    var_dump($MyArr);
   

    // $lev2s= $html->find('.detailed-statistics',0);
    // $lev2s3=$lev2s->find('tr',3);
    // // $headLev2s3=$lev2s3->find('td',0);
    // // echo  $headLev2s3." | ";
    // foreach($lev2s3->find('td') as $td){
    //     echo $td." | ";
    // }




    // echo "<hr>";
    // $lev1_1= $html->find('.level-1',0);
    // $headLev1_1=$lev1_1->find('th',0);
    // echo $headLev1_1." | ";
    //  foreach($lev1_1->find('td') as $td){
    //     echo $td." | ";
    // }
    // echo "<hr>";
    
    // $lev1_2= $html->find('.level-1',1);
    // $headLev1_2=$lev1_2->find('th',0);
    // echo $headLev1_2." | ";
    //  foreach($lev1_2->find('td') as $td){
    //     echo $td." | ";
    // }
    // echo "<hr>";

    // $lev1_3= $html->find('.level-1',2);
    // $headLev1_3=$lev1_3->find('th',0);
    // echo $headLev1_3." | ";
    //  foreach($lev1_3->find('td') as $td){
    //     echo $td." | ";
    // }
    // echo "<br>";
    // echo $html->find('.level-1',0);
    // echo $html->find('.level-1',1);
    // echo $html->find('.level-1',2);
}
exit();
/*конец блока*/

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