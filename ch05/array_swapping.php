<?php
    $arr = [10,33,12,8,2,1,5,882];
    print_r($arr);
    print "<br>";

    $temp = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $temp;
    print_r($arr);
    print "<br>";


?>