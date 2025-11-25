<style>
    .bord{
        border: 2px solid blue;
        margin: 1px;
        padding: 5px;
        text-align: center;
    }
</style>

<table >
<?php

for ($x=2; $x <10; $x++){
    echo "<tr>";
    for ($y=2; $y <10; $y++){
        $space = "&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;";
        if ($y*$x >9) {
            $space = "&nbsp;"."&nbsp;";
        }

        echo "<td class='bord'> $y  * $x = ".($y*$x).$space ."</td>";
       
    }
    echo "</tr>";
}

?>

</table>
