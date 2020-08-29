<?php
//Write a PHP program to check the bits of the two given positions of a number are same or not
// 112 - > 01110000
// Test 2nd and 3rd position
// Result: True
// Test 4th and 5th position
// Result: False
function testBitPosition($num,$pos1,$pos2){
    $pos1--;
    $pos2--;
    $bin_num=strrev(decbin($num));
    if ($bin_num[$pos1]==$bin_num[$pos2]) {
        # code...
        return 'true';
    }else{
        return 'false';
    }
}
echo testBitPosition(112,2,3);
?>