<?php
function my_generate_file($name)
{
    if (!file_exists("$name.txt")) {
        $file = fopen("$name.txt", 'w');
        fclose($file);
        return true;
    } else {
        return false;
    }
}