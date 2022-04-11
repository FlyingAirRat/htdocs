<?php
    $score = rand(0,120);
    print "점수 : $score <br>";
    switch($score){
        case $score < 60:
            print "F";
            break;
        case $score < 70:
            print "D";
            break;
        case $score < 80:
            print "C";
            break;
        case $score < 90:
            print "B";
            break;
        case $score <120:
            print "A";
            break;
        default:
            print "잘못된 값.";
    }
    $num = $score % 10;
    if($num <= 3 && $score < 100 && $score >= 60){
        print "-";
    }
    else if($num >= 7 && ($score >= 100 || $score >= 60)){
        print "+";
    }
?>