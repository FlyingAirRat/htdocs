<?php
    $mon = rand(1,12);
    switch((int)$mon){
        case 3:
        case 4:
        case 5:
            print "봄";
            break;
        case 6:
        case 7:
        case 8:
            print "여름";
            break;
        case 9:
        case 10:
        case 11:
            print "가을";
            break;
        case 12:
        case 1:
        case 2:
            print "겨울";
            break;
        default:
            print "계절 없음";
    };
    print "<br>";
    switch((int)$mon / 3){
        case 1:
            print "봄";
            break;
        case 2:
            print "여름";
            break;
        case 3:
            print "가을";
        default:
            if(($mon == 12 || $mon < 3) && $mon <= 12){
                print "겨울";
            }
            else{
                print "계절 없음";
            };
    };
?>