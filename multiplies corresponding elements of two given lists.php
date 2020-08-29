<?php
//Write a PHP program that multiplies corresponding elements of two given lists.

function multiply_two_lists($a,$b){
$x=explode(' ',trim($a));
$y=explode(' ',trim($b));
foreach ($x as $key => $value) {
    # code...
    $output[$key]=$x[$key]*$y[$key];
}
return implode(', ',$output);
}
echo multiply_two_lists(("10 12 3"), ("1 3 3"));
?>