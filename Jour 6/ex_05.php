<?php
function json_to_object(string $json) {
     return json_decode($json, FALSE);
}