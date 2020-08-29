<?php
// print folowing pattern
$n=5;
for ($i=1; $i <=$n; $i++) { 
    # code...
    for ($j=1; $j <=$i; $j++) { 
        echo '*';
        # code...
    }
    echo '<pre></pre>';
}
for ($i=$n; $i >=1; $i--) { 
    # code...
    for ($j=1; $j <=$i; $j++) { 
        echo '*';
        # code...
    }
    echo '<pre></pre>';
}
?>