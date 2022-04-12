<?php
    function sum_from_to($a,$b){
        $sum = 0;
        for($i = $a;$i<=$b;$i++){
            $sum += $i;
        }
        return $sum;
    }
    $start_num = 1;
    $end_num = 50;
    $result = sum_from_to($start_num,$end_num);
    print $result;
?>