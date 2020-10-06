<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here
$swap=0;
for ($j=0; $j < count($a)-1; $j++) { 
    for ($i=0; $i < count($a)-1-$j; $i++) { 
        if ($a[$i]>$a[$j+1]) {
            $temp=$a[$i+1];
            $a[$i+1]=$a[$i];
            $a[$i]=$temp;
            $swap++;
            # code...
        }
        # code...
    }
    # code...
}
echo 'Array is sorted in '.$swap.' swaps.\n'; 
echo "First Element: ".$a[0]."\n"; 
echo " Last Element: ".$a[count($a)-1]."\n";
?>