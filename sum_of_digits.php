<?php
// sum of digit
function sumOfDigit($num){
    $sum=0;
    for ($i=0; $i < strlen($num); $i++) { 
        # code...
        $sum=$sum+$num[$i];
    }
    return $sum;
}
echo sumOfDigit('12');
?>