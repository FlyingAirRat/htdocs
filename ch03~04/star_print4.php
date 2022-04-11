<?php
    $star = rand(2,10);

    for($i = 0; $i <= $star; $i++){
        for($j = 0; $j <= $i; $j++){
            print "*";
        }
        print "<br>";
    }
?>