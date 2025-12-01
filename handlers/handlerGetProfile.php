<?php
session_start();
$userId=$_SESSION['id'];
$mysqli= new mysqli("localhost", "root", "", "work");
$result = $mysqli->query("SELECT * FROM users WHERE `id`= '$userId'");
$users=[];
    while (($row = $result->fetch_assoc()) != null){
        $users[]=$row;
        
    }
echo json_encode($users);