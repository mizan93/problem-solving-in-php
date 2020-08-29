<?php
// Write a PHP program to remove duplicates from a sorted list.
// Input: (1,1,2,2,3,4,5,5)
// Output: (1,2,3,4,5)
function duplicateRemove($list){
    $unique=array_values(array_unique($list));
    return $unique;
}
$num=implode(array(1,1,2,2,3,4,5,5));
echo $num;
?>