<?php
//Write a PHP program to check a flat list for duplicate values. Returns true if duplicate values exists and false if values are all unique.

function has_duplicate($items){
    if (count($items)>count(array_unique($items))) {
       return 1;
    } else {
       return 0;
    }
    
}
print_r(has_duplicate([1, 2, 3,3, 4, 5, 5])); 
echo "\n";
print_r(has_duplicate([1, 2, 2,3, 4, 5])); 

?>