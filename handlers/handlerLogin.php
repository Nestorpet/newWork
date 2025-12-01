<?php
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];

// if($email == "admin@mail" and $pass == "123")
//     {
//         echo "Доступ admin разрешен";
//     }else if ($email == "ivan@mail" and $pass == "123"){
//         echo "Доступ user разрешен";
//     }else{
//         echo "Доступ запрещен";
//     }

$mysqli= new mysqli("localhost", "root", "", "work");
$result = $mysqli -> query ("SELECT * FROM Users WHERE email = '$email' AND pass = '$pass'" );
// var_dump($result);
$row = $result -> fetch_assoc();
// var_dump($row);
if($result->num_rows){
    //echo "yes";
    $_SESSION['name'] = $row['name'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['img']=$row['img'];
    // echo "Вы успешно авторизовались";
    header("Location: ../profile.php");
    //echo $_SESSION['name'];
}else{
    //echo "no";
    echo "Неправильный логин или пароль <a href='../login.php'>Попробовать ещё раз</a>";
}

