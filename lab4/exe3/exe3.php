<?php
echo "<link rel="stylesheet" href="exe3.css" type="text/css"/>";
$a=$_POST["Anum"];
$b=$_POST["Bnum"];
$l=$_POST["Lnum"];
$shopping=$_POST["shopping"];
$money= 0;
$money=(a*1)+(b*2)+(l*3);
if ($shopping==50)
{
  $money=$money+50;
}
if ($shopping==5)
{
  $money=$money+5;
}
echo "Thank you for shopping<br>";
echo "your password is:".$password."<br>";
echo "<table>";
echo "<tr>";
echo "<th> </th>";
echo "<th>Quantity</th>";
echo "<th>Cost Per Item</th>";
echo "<th>Sub Total</th>";
echo "</tr>";
echo "<tr>";
echo "<td>apple</td>";
echo "<td>1</td>";
echo "<td>".$a."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>banana</td>";
echo "<td>2</td>";
echo "<td>".$b*2."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>lemon</td>";
echo "<td>3</td>";
echo "<td>".$l*3."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>shipping</td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td>".$shopping."</td>";
echo "</tr>";
echo "<td>Total cost</td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td>".$money."</td>";
echo "</tr>";
echo "</table>";
 ?>
