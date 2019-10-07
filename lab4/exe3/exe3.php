<?php
echo '<link rel="stylesheet" href="exe3.css" type="text/css"></head>';

  $a = $_POST["Anum"];
  $b = $_POST["Bnum"];
  $l = $_POST["Lnum"];
  $shopping = $_POST["shopping"];
  $password = $_POST["password"];

$money= 0;
$bp = $b * 2;
$lp = $l * 3;
$money=$a +$bp +$lp;
$shopc=0;
if ($shopping=="50")
{
  $money=$money+50;
  $shopc=50;
}
else if ($shopping=="5")
{
  $money=$money+5;
  $shopc=5;
}
echo "Thank you for shopping<br>";
echo "your password is:".$password."<br>";
echo "<table>";
echo "<tr>";
echo "<th>Item</th>";
echo "<th>Quantity</th>";
echo "<th>Cost Per Item</th>";
echo "<th>Sub Total</th>";
echo "</tr>";
echo "<tr>";
echo "<td>apple</td>";
echo "<td>".$a."</td>";
echo "<td>1</td>";
echo "<td>".$a."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>banana</td>";
echo "<td>".$b."</td>";
echo "<td>2</td>";
echo "<td>".$bp."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>lemon</td>";
echo "<td>".$l."</td>";
echo "<td>3</td>";
echo "<td>".$lp."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>shipping</td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td>".$shopc."</td>";
echo "</tr>";
echo "<td>Total cost</td>";
echo "<td> </td>";
echo "<td> </td>";
echo "<td>".$money."</td>";
echo "</tr>";
echo "</table>";
 ?>

