<?php
$mysqli= new mysqli("localhost", "root", "", "work");
$result = $mysqli->query("SELECT * FROM articles");
 $articles = [];
// Получаем ответ от БД в виде ассоциативного массива
    while (($row = $result->fetch_assoc())!== null){
      
       $articles[]=$row;
    }
var_dump($articles);