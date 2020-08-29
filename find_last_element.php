<?php
// Write a PHP program to get the last element for which the given function returns a truth value.

function find_last($items,$func){
    $filtareditem=array_filter($items,$func);
    return array_pop($filtareditem);
}
echo find_Last(
    [1,2,3,4],function($n){
        return ($n%2)==1;
    }
);
echo '\n';
echo find_Last([1, 2, 3, 4], function ($n) {
    return ($n % 2) === 0;
});
?>
