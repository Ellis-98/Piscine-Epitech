<?php
function my_facto($nbr = null){ 
if (isset($nbr) && is_int($nbr) && $nbr >= 0){
$resultat = 1;
for ($i = 1; $i <= $nbr; $i++){
$resultat *= $i;}
return $resultat;}
else{
return NULL;}
}
?>