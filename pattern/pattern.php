<?php
// print the flowing pattarn
// *  
// * *  
// * * *  
// * * * *  
// * * * * *
for ($i=1; $i <=5; $i++) { 

for ($j=1; $j <=$i; $j++) { 
   echo '*';
   if ($j<$i) {
       echo ' ';
   }
}
echo "<pre></pre>";
}

?>