<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);
// $n=5;
fclose($stdin);
$binaryval=decbin($n);
$binArray=str_split($binaryval);
$n=$binArray;
$count=0;
$i=0;
$highcount=0;
foreach ($n as $value) {
    # code...
    if ($n[$i]==1) {
        # code...
        $count++;
        $i++;

    }else{
        if ($count>$highcount
        ) {
            # code...
            $highcount=$count;
        }
        $i++;
        $count=0;
    }
        if ($count>$highcount) {
            # code...
            $highcount=$count;
        }
    }
    echo $highcount."\n";

