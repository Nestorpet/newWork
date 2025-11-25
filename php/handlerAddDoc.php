<?php

$mysqli= new mysqli("localhost", "root", "", "website");
$titleND = $_POST['titleND'];
$sortND = $_POST['sortND'];
$linkND =$_POST['linkND'];
$groupND = $_POST['groupND'];
$dir = '../documents/';
$point = date("mdHis");
//var_dump($_POST);


$userFile = $_FILES['userFile'];
if ($userFile['name']){
    $temp = $_FILES['userFile']['tmp_name'];
    $typeFile =  $_FILES['userFile']['type'];
    $arrPdf=(explode(".", $userFile['name']));
    $typeFileFirst = $arrPdf[count($arrPdf)-1];
    $name =$point.".".$typeFileFirst;
    move_uploaded_file($temp, $dir.$name);
    $allDir = $dir.$name;
}else{
    $allDir = "";
}
//echo "allDir=".$allDir;

$userFileWord = $_FILES['userFileWord'];
if($userFileWord['name']){
    $tempW = $_FILES['userFileWord']['tmp_name'];  
    $typeFileW =  $_FILES['userFileWord']['type'];
    $arr=(explode(".", $userFileWord['name']));
    $typeFileSecond = $arr[count($arr)-1];
    $nameW =$point.".".$typeFileSecond; 
    move_uploaded_file($tempW, $dir.$nameW);
    $allDirWord = $dir.$nameW;
}else{
    $allDirWord = "";
}
//echo "allDir1=".$allDirWord;

$mysqli->query("INSERT INTO `ND_Doc`(`titleND`, `sortND`, `readND`, `loadND`, `linkND`, `groupND`) VALUES ('$titleND','$sortND', '$allDir', '$allDirWord', '$linkND','$groupND')");
header("Location:../pages/index_ND_MSP_2.php?id=$groupND");

