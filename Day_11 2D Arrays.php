<?php



$stdin = fopen("php://stdin", "r");

$arr == array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

fclose($stdin);

$tempArray=array();
$total;
for ($i=0; $i < 4; $i++) { 
    # code...
    for ($j=0; $j < 4; $j++) { 
        # code...
        $tempArray = array($arr[$i][$j],$arr[$i][$j+1],$arr[$i][$j+2],$arr[$i+1][$j+1],$arr[$i+2][$j],$arr[$i+2][$j+1],$arr[$i+2][$j+2]);
        $tempTotal=array_sum($tempArray);
        if ($tempTotal>$total) {
            # code...
            $total=$tempTotal;
        }
    }
}
echo $total;