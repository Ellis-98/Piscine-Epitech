<?php
function str_lower_epur($str=NULL){
  if(gettype($str) != "string" || gettype($delim) != "string"){
    return NULL;
  }else{
    return explode($delim,$str);
  }
}
?>