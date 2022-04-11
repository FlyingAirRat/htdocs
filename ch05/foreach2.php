<?php
    $array = array(
        "Hong" => 182.2,
        "Hwang" => 180.4,
        "Kim" => 173.2,
        "Park" => 169.2
    );
    print "<table><tr><td>이름</td><td>키</td></tr>";
    foreach($array as $i => $j){
        print "<tr><td>".$i."</td><td>".$j."</td></tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
</body>
</html>