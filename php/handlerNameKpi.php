<?php
//var_dump($_GET);
$mysqli= new mysqli("localhost", "root", "", "website");
$idPodved = $_GET['Podved'];
$nameKpi = $_GET['nameKpi'];
//INSERT INTO `KPI_list`(`id`, `id_podved`, `title_kpi`) VALUES ('[value-1]','[value-2]','[value-3]')
// echo $idPodved;
// echo $nameKpi;
$mysqli->query("INSERT INTO `KPI_list`(`id_podved`, `title_kpi`) VALUES ('$idPodved', '$nameKpi' )");
header("Location:../test.php");
