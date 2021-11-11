<?php
function make_pangolins(array &$my_array){
    foreach ($my_array as &$pangolin){
        $pangolin = "pangolin";
    }
}