<?php
    $r_val = rand(1,10);
    print $r_val;
    while ($r_val < 10){
        print $r_val;
        $r_val = rand(1,10);
        print $r_val;
    }
    print "끝";
?>