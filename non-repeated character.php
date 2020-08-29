<?php

//Write a PHP program to find the first non-repeated character in a given string.

function non_repeat($word){
    for ($i=0; $i <=strlen($word) ; $i++) { 
        # code...
        if (substr_count($word,substr($word,$i,1))==1) {
            # code...
            return substr($word,$i,1);
        }
    }
}
echo non_repeat('abcdea');

?>