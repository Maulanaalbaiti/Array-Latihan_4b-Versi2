<?php

$ASEAN_Old = ["Indonesia","Singapura","Malaysia","Brunei","Thailand"];
$ASEAN_New = ["Indonesia","Singapura","Malaysia","Brunei","Thailand","Laos","Filipina","Myanmar"];

?>
<html>
    <head>
        <title>latihan 4b</title>
    </head>
    <body>
        <h2>Daftar Negara ASEAN Awal :</h2>
        <?php
        for ($i=0; $i < count($ASEAN_Old); $i++) { 
            echo "<li>$ASEAN_Old[$i]</li>";
        }
        ?>
         <h2>Daftar Negara ASEAN Baru :</h2>
        <?php
        for ($j=0; $j < count($ASEAN_New); $j++) { 
            echo "<li>$ASEAN_New[$j]</li>";
        }
        ?>
    </body>
</html>
