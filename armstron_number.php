<?php
//Write a PHP program to check whether a number is an Armstrong number or not
// Best practice
$num=678;

$slen=strlen($num);
$sum=0;
$num=(string)$num;
for ($i=0; $i < $slen; $i++) { 
    # code...
    $sum=$sum+pow((String)$num{$i},$slen);
}
if ((string)$sum==(string)$num) {
    # code...
    echo 'Armstrong num.';
} else {
    # code...
    echo 'Not armstrong num.';
}

// not best practice
// $sum=0;$temp;$rem;
// $num=1634;
// $temp=$num;
// while($num>0){
//     $rem=$num%10;
//     $num=$num/10;
//     $sum=$sum+($rem*$rem*$rem);
// }
// if ($temp==$sum) {
//    echo 'Armstrong number';
// } else {
//    echo 'Not armstrong number';
// }

?>