<?php
function print_calls() {
 static $calls = 0;
 $calls++;
 echo $calls;
}
?>