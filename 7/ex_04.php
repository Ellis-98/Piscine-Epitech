<?php
function my_pow_rec($nb_a = null, $nb_b = null){
if(!is_integer($nb_b) || !is_integer($nb_a) || $nb_b < 0){
return null;}
elseif($nb_b == 0){
return 1;}
else{
return(my_pow_rec($nb_a, $nb_b-1)*$nb_a);}
}
?>