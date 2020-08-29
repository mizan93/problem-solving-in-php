<?php
// Write a PHP program to get the head of a given list.

function head($items){
    return reset(($items));
}
function last($items){
    return end(($items));
}
print_r(head([1,12,3]));
echo '\n';
print_r(last([4,12,4,5,-1,43]));
?>