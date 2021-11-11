<?php
function print_age(int$age){
if ($age == 42){
echo 'the answer.'."\n";}
switch (true) {
case ($age <= 0);
echo 'Enfantillage...'."\n";
break;
case ($age != 42 && $age > 0);
echo 'je peux aller en boite'."\n";
break;
}
}
?>