<?php
function A(){
    global $n;
    $n = "A";
    $m = "A";
    print "$n, $m<br>";
}
$n = "M";
$m = "M";

print "1: $n, 2: $m<br>";
A();
print "3: $n, 4: $m<br>";
