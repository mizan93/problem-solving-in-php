<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
    if (($column == 1 and $row != 0 and $row != 6) or (($row == 0 or $row == 6) and $column > 1 and $column < 5) or ($row == 3 and $column > 2 and $column < 6) or ($column == 5 and $row != 0 and $row != 2 and $row != 6))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "<pre></pre>";
}
?>
