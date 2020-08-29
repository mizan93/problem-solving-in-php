<?php
//  Write a PHP program to count number of vowels in a given string.

function count_vowels($string){
    preg_match_all('/[aeiou]/i',$string,$match);
    return count($match[0]);
}
echo count_vowels('kdeidjkfjdidkkelsdsooe');
?>