<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
// echo $name."<br>";
// echo $lastname."<br>";
// echo $email."<br>";
// echo $pass."<br>";
// echo "Name $name, Lastname $lastname, email $email, Pass $pass";
$mysqli= new mysqli("localhost", "root", "", "work");
// $result = $mysqli->query("SELECT * FROM `users` WHERE email='$email'");
//  var_dump($result);

$result = $mysqli -> query("SELECT * FROM users WHERE email='$email'");
if($result->num_rows){
    echo "Такой пользователь уже существует <a href='../reg.php'>Зарегистрировать другого</a>";
}else{
    
$mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");

header("Location:../login.php");
}