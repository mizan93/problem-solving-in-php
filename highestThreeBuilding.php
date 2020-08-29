<?php
//Find heights of the top three building in descending order from eight given buildings
$heights = array();
  while($line = fgets(STDIN)) {
    rtrim($line, "\n");
    array_push($heights, (int)$line);
  }
  rsort($heights);
  print("Heights of the top three buildings:\n");
  echo $heights[0]."\n";
  echo $heights[1]."\n";
  echo $heights[2]."\n";
?>