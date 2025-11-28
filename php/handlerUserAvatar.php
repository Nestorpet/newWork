<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "work");
$id=$_SESSION['id'];
$userFile = $_FILES['userFile'];
$arr=(explode(".", $userFile['name']));
$extension=$arr[count($arr)-1];
$goodExtension = ["png", "jpg", "jpeg", "gif"];
foreach ($goodExtension as $e){
    if($e==$extension){
        //echo $e;
        $dir = '../img/user_avatar/';
        $temp = $_FILES['userFile']['tmp_name'];  
        $name = $_FILES['userFile']['name']; 
        $dirIn= 'img/user_avatar/'.$name;
        move_uploaded_file($temp, $dir.$name);
        $mysqli->query("UPDATE `users` SET `img`='$dirIn' WHERE id =$id");
        $_SESSION['img']=$dirIn;
        header("Location:../profile");
        exit();  
    }
}

exit("Type file ERROR!");