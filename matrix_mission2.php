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
                    break;
                case 1:
                    $sum2 += $score[$i][$j];
                    break;
                case 2:
                    $sum3 += $score[$i][$j];
                    break;
            }
        }
    }
    print "국어<br>합계: ".$sum1."<br>";
    $avr1 = $sum1/count($score);
    print "평균:".$avr1."<br><br>";
    print "영어<br>합계: ".$sum2."<br>";
    $avr2 = $sum2/count($score);
    print "평균:".$avr2."<br><br>";
    print "수학<br>합계: ".$sum3."<br>";
    $avr3 = $sum3/count($score);
    print "평균:".$avr3."<br><br>";
?>