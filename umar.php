<?php
// SUM
$maths = 84;
$computer = 91;
$english = 87;
$adds=$computer+$maths+$english;
echo $adds."<br>";
?>

<?php
// AVERAGE
$maths = 84;
$computer = 91;
$english = 87;
$adds= $computer+$maths+$english;
$avg=($adds)/3;
echo $avg."<br>";
?> 

<?php
// GREATER THAN
$maths = 84;
$computer = 91;
$english = 87;
if($computer>$maths&$english)
echo"Computer is Better than Others"."<br>";
else
echo "Computer is Worse than Others"."<br>";
?>

<?php
// AGE
$Ali= 21;
$Raza= 27;
if($Ali>= $Raza)
echo"Ali is younger"."<br>";
else
echo"Raza is younger"."<br>";
?>

<?php
// PERCENTAGE
$Ali= 432;
$Ahmad= 398;
$TotalMarks= 500;
$percent=($Ali/$TotalMarks)*100;
echo $percent."<br>"
?>

<?php
$marks= 86;
if($marks>90){
echo"A+";
}elseif ($marks>80) 
echo "A"."<br>"
?>

<?php
$Marks= 78;
if($Marks>=55){
echo "PASS"."<br>";
}else
echo "FAIL"."<br>";
?>