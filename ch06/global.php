<?php
    

    $i = 0;
    function counts(){
        global $i;
        $i++;
    };
    while($i < 10){
        counts();
        print $i."<br>";
    }
?>