<?php
    $name = "홍길동";
    print $name."<br>";
    if(isset($name)){
        print "이름 멋지네요!(1)";
    }
    unset($name);
    if(isset($name)){
        print "이름 멋지네요!(2)";
    }
    print $name."<br>";
    print "끝.";
?>