<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function exe1(){
  echo "<table>";
  echo "<tr>";
  for ($a=0; $a <101 ; $a++)
  {
    if ($a == 0)
    {
      echo " ";
    }
    else
    {
      echo "<td>".$a."</td>";
    }
  }
  for ($i=0; $i < 101; $i++)
  {
    for ($j=0; $j < 101; $j++)
    {
      if ($j==0)
      {
        echo "<tr><td>".$i."</td>";
      }
      if ($j==100)
      {
        echo "<td>".$i*$j."</td></tr>";
      }
      else
      {
        echo "<td>".$i*$j."</td>";
      }
    }
  }
  echo "</tr>";
  echo "</table>";
}

exe1();
 ?>
