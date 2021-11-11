<?php
function print_until($max){
if ($max < 0) {
echo 'Boulet !'."\n";
return false;
}
$i = 0;
while ($i <= $max) {
echo $i++ . "\n";
}
return true;
}
?>