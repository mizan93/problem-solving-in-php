<?php
// Write a PHP program to compute the sum of the prime numbers less than 100.

$prime=array();
$is_prime_no=false;
for ($i=2; $i < 100; $i++) { 
    # code...
    $is_prime_no=true;
    for ($j=2; $j <($i/2) ; $j++) { 
        # code...
        if ($i%$j==0) {
            # code...
            $is_prime_no=false;
        break;
        }
     
    }
    if ($is_prime_no) {
        # code...
        array_push($prime,$i);
    } if (count($prime)==100) {
    break;
       }
}
echo array_sum($prime)."\n";

?>