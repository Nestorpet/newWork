<?php
session_start();

$path = explode("/",$_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$mysqli= new mysqli("localhost", "root", "", "work");
require_once('php/classes/ArticleController.php');
require_once('php/classes/UserController.php');
require_once('php/classes/simple_html_dom.php');
require_once('php/classes/Route.php');

Route::view('/login', 'view/login.html');
Route::view('/reg', 'view/reg.html'); 
Route::view('/articles', 'view/articles.html');
Route::view('/article/{id}', 'view/article.html');
Route::view('/profile', 'view/profile.html');
Route::view('/addArticle', 'view/addArticle.html');


Route::get('/getArticles', function(){return ArticleController::getArticles();});
Route::get('/getAuthUserData', function(){return UserController::getAuthUserData();});
Route::get('/exit', function(){UserController::logout();});


Route::post('/login', function(){return UserController::login();});
Route::post('/reg', function(){return UserController::reg();});
Route::post('/article', function(){return ArticleController::getArticleById();});
Route::post('/addArticle',function(){return ArticleController::addArticle();});
Route::post('/addComment', function(){return ArticleController::addComment();});
Route::post('/getCommentByArticalId', function(){return ArticleController::getCommentByArticalId($_POST['article_id']);});
Route::post('/updateUserAvatar', function(){return UserController::updateUserAvatar();});


if($path[1]=='deleteArticle'){
    ArticleController::deleteArticle();

}elseif($path[1]=='updateUserAvatar'){
    UserController::updateUserAvatar();
}else{
    $content = "Страница не найдена 404";
}

require_once('template.php');

/*временный блок для работы с сайтом banki.ru*/ 
// if($path[1]=='banki'){
//     $html=file_get_html('https://ofd.nalog.ru/statistics.html?statDate=&level=0&fo=1&ssrf=33');
//     $MyArr=[];
//     $MyArr1=['14 525', '16 524', 'world', '13'];

    
//     $lev2= $html->find('.level-2',0);
//     $headLev2=$lev2->find('th',0);
   
//     echo  $headLev2." | ";
   
//     foreach($lev2->find('td') as $td){
//         $MyArr[]= $td->plaintext;
      
//         echo $td->plaintext." | ";
       
//     }

//     echo "<hr>";
    

//     $lev2s= $html->find('.detailed-statistics',0);
//     $lev2s3=$lev2s->find('tr',3);
//     // $headLev2s3=$lev2s3->find('td',0);
//     // echo  $headLev2s3." | ";
//     foreach($lev2s3->find('td') as $td){
//         $MyArr[]= $td->plaintext;
//         echo $td." | ";
//     }

//     var_dump($MyArr);

    
//    //фунция перевода строчного массива в цифровой с удалением пробелов
//     function convertStringArrayToIntArray(array $stringArray): array {
//         $result = [];
//         foreach ($stringArray as $str) {
//         // Очищаем строку от пробелов
//         $cleaned = str_replace(' ', '', $str);
//         // Проверяем, что строка содержит только цифры
//         if (ctype_digit($cleaned)) {
//             $result[] = (int)$cleaned;
//         } 
//         }
//         return $result;
//     }

//     $outputArray = convertStringArrayToIntArray($MyArr);

//     var_dump($outputArray);
   




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
//     // echo $html->find('.level-1',2);
// }
// exit();
/*конец блока*/