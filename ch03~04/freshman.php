<?php
    $freshman = array(
        "David" => "Computer",
        "Alice" => "Math",
        "Elsa" => "Physics",
        "Bob" => "Music",
        "Chris" => "Electronics",
    );
    print_r($freshman);
    print "<br>";
    print $freshman["David"]."<br>";
    /*print $freshman[1]."<br>";
    이 코드는 작동하지 않음.*/
    $freshman["1"] = "hello";
    print_r($freshman);
?>