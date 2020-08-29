<?php
// Write a PHP program to test if a given string occurs at the end of another given string. 

function str2_in_str1($str1,$str2){
    $P_len=strlen($str1);
    $w_len=strlen($str1);
    $w_start=$w_len-$P_len-1;
    if (substr($w_start,$w_len-$P_len,$P_len)==$str2) {
        return "true";
    } 
    else 
    {
       return "false";
    }
    
}
echo str2_in_str1("Python","on")."\n";
echo str2_in_str1("JavaScript","php")."\n";
?>