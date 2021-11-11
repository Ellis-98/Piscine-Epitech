<?php
function my_comb_n($n){
    if ($n == 0){
        echo PHP_EOL;
    }else {
        $arr_nbr = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];
        $nbr_start = intval(implode(array_slice($arr_nbr, 0, $n)));
        $nbr_end = intval(implode(array_slice($arr_nbr, -$n)));
        for($i = $nbr_start; $i <= $nbr_end; $i++){
            $str = str_split(strval($i));
            $array_to_sort = $str;
            sort($array_to_sort);
            if (implode($str) == implode($array_to_sort) and count(array_unique($array_to_sort)) == $n){
                echo $i . PHP_EOL;
            }
        }
    }
}