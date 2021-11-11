<?php
function write_into_my_file($str, $file, $append = false)
{

    if ($append) {
        $fp = fopen($file, "a");
        fwrite($fp, $str);
        fclose($fp);
        return true;
    } elseif ($append == false) {
        $fp = fopen($file, "w");
        fwrite($fp, $str);
        fclose($fp);
        return true;
    } else {
        return false;
    }
}