<?php
    $sum = 0;
    $score_arr = array(100, 90, 33, 87, 65);
    for($i = 0; $i < count($score_arr); $i++){
        $sum += $score_arr[$i];
    }
    print "$sum";
    $sum /= count($score_arr);
    print "$sum";
?>