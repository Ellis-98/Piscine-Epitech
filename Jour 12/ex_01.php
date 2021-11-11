<?php 

    function printArray(array $tableau){
        foreach($tableau as $key => $value){
            echo $key." => ".$value."\n";
        }
    }

?>