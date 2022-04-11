<?php
    $var = rand(3,10);
    echo "<table>";
    $sum = 1;
    for($i = 1; $i <= $var; $i++){
        echo "<tr>";
        for ($j = 1; $j <= $var; $j++){
            echo "<td>".$sum."</td>";
            $sum++;
        }
        echo "</tr>";
    }
    echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: solid 1px black;
        }
    </style>
</head>
<body>
    
</body>
</html>