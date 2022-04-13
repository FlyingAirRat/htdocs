<?php
    function sum(){
        $result = 0;
        foreach(func_get_args() as $val){
            $result += $val;
        }
        return $result;
    }
    print sum(4,5,2,3,1);
    
?>