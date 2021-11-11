<?php
function my_add_to_cookie($key,$value) {
    Setcookie($key,$value.'toto');
}
?>