<?php
$mysqli = new mysqli("localhost", "root", "", "website");
$result = $mysqli->query("SELECT `id`, `myDate` FROM `list_Date`");
$b = $result->num_rows;
$arrDate = [];
for($i=0; $i<$b;$i++){
$rowDate = $result->fetch_assoc();
array_push($arrDate, $rowDate);
}                          
var_dump($arrDate);
usort($arrDate, function ($a, $b) {
    return strtotime($a['myDate']) <=> strtotime($b['myDate']);
});
echo "<hr>";
$length = count($arrDate);
echo $length;
echo "<hr>";
var_dump($arrDate);
echo "q=", $arrDate[0]['myDate'];