<?php
//Write a PHP program to convert word to digit.
// Input: zero;three;five;six;eight;one
// Output: 035681
function word_digit($word){
    $word=explode(";",$word);
    $result='';
    foreach ($word as $value) {
        # code...
        switch (trim($value)) {
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;    
       
        }
    }
    return $result;
}
echo word_digit("zero;three;five;six;eight;one")."\n";
?>