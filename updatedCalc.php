<form method="get">
<h1>Simple calculator by Umar</h1><br>

<input type="text" name="val1" placeholder="number 1" required><br>
<input type="text" name="val2" placeholder="number 2" required><br>

<select type="text" name="operator"><br>
<option value="select" >Select</option>
<option value="+" >+</option>
<option value="-" >-</option>
<option value="*" >*</option>
<option value="/" >/</option>
</select>
<input type="submit" name="sub" value="=">
</form>


<?php
$n1 = $_GET['val1'];
$n2 = $_GET['val2'];
$op = $_GET['operator'];



if($op== '+' ){ 

$sum = $n1 + $n2;

echo "<h3>SUM of Two Values is:</h3>  <h4>$sum</h4><br>";
}
elseif($op== '-' ){

$sub = $n1 - $n2;

echo "<h3>SUBTRACTION of Two Values is:</h3> <h4>$sub</h4><br>";
}
elseif($op== '*' ){
$mult = $n1 * $n2;

echo "<h3>MULTIPLICATION of Two Values is:</h3> <h4>$mult</h4><br>";
}
elseif($op== '/' ){
$div = $n1 / $n2;

echo "<h3>DIVISION of Two Values is:</h3> <h4>$div</h4><br>";
}
else{
echo"Please Enter Operator";
}
?>