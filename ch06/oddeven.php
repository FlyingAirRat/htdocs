<?php
    function print_odd_even($a){
        if(($a % 2) == 0){
            print $a." = even";
        }
        else{
            print $a." = odd";
        }
    }
    $num = rand(1,10);
    print_odd_even($num);
?>