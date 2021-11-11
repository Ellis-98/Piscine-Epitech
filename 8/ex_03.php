<?php
function my_mail($mail)
{
    if (is_string($mail) && !$mail == '') {
        $a = substr(strstr($mail, '@'), 1);
        $check = strrchr($a, ".");
        $a = str_replace($check, '', $a);
        echo "$a\n";
    }
}