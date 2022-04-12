<?php
    function print_sum($a, $b){
        $ret = $a+$b;
        print $a."+".$b." = ".$ret;
    }
    function print_minus($a, $b){
        $ret = $a-$b;
        print $a."-".$b." = ".$ret;
    }
    function print_mul($a, $b){
        $ret = $a*$b;
        print $a."*".$b." = ".$ret;
    }
    function print_div($a, $b){
        $ret = $a/$b;
        print $a."/".$b." = ".$ret;
    }
    function print_mod($a, $b){
        $ret = $a%$b;
        print $a."%".$b." = ".$ret;
    }

    $i = 9;
    $j = 5;
    print_sum($i,$j);
    print "<br>";
    print_minus($i,$j);
    print "<br>";
    print_mul($i,$j);
    print "<br>";
    print_div($i,$j);
    print "<br>";
    print_mod($i,$j);

?>