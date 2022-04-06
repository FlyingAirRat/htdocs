<?php
    print "[";
    for($val = 1; $val <= 7; $val = $val + 1){
        echo $val;
        if($val < 7){
            echo ",";
        }
    }
    print "]";
?>