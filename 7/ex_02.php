<?php
function my_facto_rec($nbr = null){
if ($nbr < 0 || !is_integer($nbr)){
return null;} 
elseif($nbr <= 1){
return 1;}
else{
return $nbr * my_facto_rec($nbr - 1);}
}
?>