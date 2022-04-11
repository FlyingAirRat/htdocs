<?php
    $arr = [10,33,12,8,2,1,5,882];
    $temp = 0;
    for($i = 0; $i <= count($arr)-1; $i++){
        for($j=0;$j < (count($arr)-$j); $j++){            
            if($arr[$i] < $arr[$j]){
                $temp=$arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j]=$temp;
            }
            else{
                continue;
            }
        }
    }
    print_r($arr);
    print count($arr);
?>