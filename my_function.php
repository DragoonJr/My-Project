<?php
function checkPalindrome($val){
  $str=str_replace(' ','',$val);
  $str=strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $str));
  $str_rev=strrev($str);
  if($str==$str_rev){
    return true;
  }else{
    return false;
  }
}

function checkAnagram($val1,$val2){
  if(count_chars($val1,1)==count_chars($val2,1)){
    return true;
  }else{
    return false;
  }
}
?>
