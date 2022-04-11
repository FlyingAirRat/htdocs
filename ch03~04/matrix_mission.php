<?php
    $score = array(
        array(100,100,100),
        array(90,80,70),
        array(55,65,75)
    );
    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;
    for($i = 0; $i<count($score); $i++){
        for($j = 0; $j < 3; $j++){
            switch($j){
                case 0:
                    $sum1 += $score[$i][$j];
                    print $i." ".$j." ".$score[$i][$j]."<br>".$sum1."<br>";
                    break;
                case 1:
                    $sum2 += $score[$i][$j];
                    print $i." ".$j." ".$score[$i][$j]."<br>".$sum2."<br>";
                    break;
                case 2:
                    $sum3 += $score[$i][$j];
                    print $i." ".$j." ".$score[$i][$j]."<br>".$sum3."<br>";
                    break;
            }
        }
    }
    print "<br>각 과목별 총점: ".$sum1." ".$sum2." ".$sum3."<br>";
?>