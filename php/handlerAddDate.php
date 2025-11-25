<?php

$mysqli= new mysqli("localhost", "root", "", "website");
$myDate = $_GET['newDate'];



$mysqli->query("INSERT INTO `list_Date`(`myDate`) VALUES ('$myDate')");
header("Location:../test.php");

