<?php
function is_prime($nbr = null){
    if (!is_integer($nbr)){
        return null;
    }else{
        if(($nbr % 2 == 0 || $nbr % 3 == 0 || $nbr % 5 == 0 || $nbr == 1) && $nbr !=2 && $nbr !=3 && $nbr !=5){
            return false;
        }else{
            return true;
        }
    }
}
?>