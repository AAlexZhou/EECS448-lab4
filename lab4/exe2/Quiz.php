 <?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$a=0;

  if ($q1=="2")
  {
    $a=$a+20;
  }
  if ($q2=="3")
  {
    $a=$a+20;
  }
  if ($q3=="500")
  {
    $a=$a+20;
  }
  if ($q4=="1100")
  {
    $a=$a+20;
  }
  if ($q5=="2000")
  {
    $a=$a+20;
  }

echo "Question 1: 1+1=?<br>";
echo "You answered:".$q1."<br>";
echo "Correct answer: 2<br>";
echo "<br>";
echo "Question 2: 1+2=?<br>";
echo "You answered:".$q2."<br>";
echo "Correct answer: 3<br>";
echo "<br>";
echo "Question 3: 200+300=?<br>";
echo "You answered:".$q3."<br>";
echo "Correct answer: 500<br>";
echo "<br>";
echo "Question 4: 3900-2800=?<br>";
echo "You answered:".$q4."<br>";
echo "Correct answer: 1100<br>";
echo "<br>";
echo "Question 5: 4300-2300=?<br>";
echo "You answered:".$q5."<br>";
echo "Correct answer: 2000<br>";
echo "<br>";
echo "your score:".$a."%<br>";
  ?>
