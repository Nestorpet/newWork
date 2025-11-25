<?php
//var_dump($_GET);
$nameKpiPodved=$_GET['nameKpiPodved'];
$idPodved=$_GET['idPodved'];
$mysqli= new mysqli("localhost", "root", "", "website");
$mysqli->query("INSERT INTO `KPI_list`(`id_podved`, `title_kpi`) VALUES ('$idPodved','$nameKpiPodved')");
