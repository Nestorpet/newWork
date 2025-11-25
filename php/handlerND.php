<?php
//var_dump($_POST);
$mysqli= new mysqli("localhost", "root", "", "website");
$titleND = $_POST['titleND'];
$sortND = $_POST['sortND'];
$linkND = $_POST['linkND'];
$groupND = $_POST['groupND'];
$mysqli->query("INSERT INTO `ND_list`( `titleND`, `sortND`, `linkND`, `groupND`)VALUES ('$titleND','$sortND','$linkND','$groupND')");
echo"Документ добавлен";