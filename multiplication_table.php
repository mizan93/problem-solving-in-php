<?php
// Write a PHP program to print out the multiplication table upto 6*6.
for ($i=0; $i < 7; $i++) { 
    # code...
    for ($j=0; $j < 7; $j++) { 
        # code...
        if ($j==1) {
            # code...
            echo str_pad($i*$j,2," ",STR_PAD_LEFT);
        }
        else {
            echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
          }
    }
    echo '\n';
}


?>