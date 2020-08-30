<?php

for ($row=0; $row <=7; $row++) { 
    for ($col=0; $col <=7; $col++) { 
        # code...
        if ((($col==1 || $col==5) && $row!=0) || (($row==0 || $row==3) && ($col>1 && $col <5))) {
            # code...
            echo '*';
        } else {
            # code...
            echo "  ";
        }
        
    }
    # code...
    echo '<pre></pre>';
}
?>