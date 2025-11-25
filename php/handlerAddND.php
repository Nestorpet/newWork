<?php

$mysqli= new mysqli("localhost", "root", "", "website");
$nameND = $_POST['nameND'];
$linkPic = $_POST['linkPic'];


$mysqli->query("INSERT INTO `ND_All`(`nameND`, `linkPic`) VALUES ('$nameND','$linkPic')");
echo"Документ добавлен";

