<?php
    $arr = [10,20,30,40,50];

    function add_array($arr, $i){
        global $arr;
        $index = 0;
        foreach($arr as $index => $val){
            $arr[$index] += $i;
        };
    };

    add_array($arr, 10);

    print_r($arr);

?>