<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "Jhon" => 24
    );

    $copy_arr1 = $arr_age;
    print "origin : ";
    print_r($arr_age);
    print "<br>";

    $copy_arr1 = $arr_age;
    sort($copy_arr1);
    print "copy : ";
    print_r($copy_arr1);
    print "<br>";

    $copy_arr2 = $arr_age;
    ksort($copy_arr2);
    print "copy2 : ";
    print_r($copy_arr2);
    print "<br>";

    $copy_arr3 = $arr_age;
    krsort($copy_arr3);
    print "copy3 : ";
    print_r($copy_arr3);
    print "<br>";
?>