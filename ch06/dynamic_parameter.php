<?php
    function sum(...$vals){
        $result = 0;
        for($i=0;$i<count($vals);$i++){
            $result+= $vals[$i];
        }
        return $result;
    }
    print sum(4,5,2,3,1);
    
?>