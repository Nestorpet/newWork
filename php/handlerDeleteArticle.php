<?php

$id = $_GET['id'];

    $mysqly = new mysqli("localhost", "root", "", "work");
    $mysqly->query("DELETE FROM `articles` WHERE id='$id'");
    header("Location: ../articles.php");
