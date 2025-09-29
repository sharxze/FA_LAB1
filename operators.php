<?php
$a = 10;
$b = 5;

// Arithmetic Operators
echo "Arithmetic Operators:<br>";
echo "a = $a, b = $b<br><br>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br><br>";

// Comparison Operators
echo "Comparison Operators:<br>";
echo "$a == $b : " . ($a == $b ? 'true' : 'false') . "<br>";
echo "$a != $b : " . ($a != $b ? 'true' : 'false') . "<br>";
echo "$a > $b  : " . ($a > $b ? 'true' : 'false') . "<br>";
echo "$a < $b  : " . ($a < $b ? 'true' : 'false') . "<br>";
echo "$a >= $b : " . ($a >= $b ? 'true' : 'false') . "<br>";
echo "$a <= $b : " . ($a <= $b ? 'true' : 'false') . "<br><br>";

// Logical Operators
echo "Logical Operators:<br>";
echo "($a > 0 && $b > 0) : " . (($a > 0 && $b > 0) ? 'true' : 'false') . "<br>";
echo "($a > 0 || $b < 0) : " . (($a > 0 || $b < 0) ? 'true' : 'false') . "<br>";
echo "!($a == $b)        : " . ((!($a == $b)) ? 'true' : 'false') . "<br>";
?>

