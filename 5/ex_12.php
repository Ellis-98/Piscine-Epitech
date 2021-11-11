<?php
function get_execution_time() {
     return round((microtime(get_as_float:true) - $_SERVER['REQUEST_TIME_FLOAT']), precision:7);
     }