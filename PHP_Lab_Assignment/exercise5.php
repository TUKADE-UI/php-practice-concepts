<?php
// Exercise 5: PHP Constants and Comparison Operators

//  Define constant
define("UNIVERSITY", "Jamhuuriya University of Science and Technology");
?>
<!DOCTYPE html>
<html>
<head><title>Exercise 5</title></head>
<body>
<h2>Exercise 5: Constants and Comparison Operators</h2>
<?php
//  Display the constant
echo "University: " . UNIVERSITY . "<br>";
echo "Student: Abdinasir Adan Tukade (C1230926) <br><br>";

//  Variables
$a = 25;
$b = 40;

// 4 and 5 Comparison with messages
echo "a = $a, b = $b <br>";

if ($a > $b) {
    echo "$a is greater than $b <br>";
} elseif ($a < $b) {
    echo "$a is less than $b <br>";
} else {
    echo "$a is equal to $b <br>";
}

echo "<h3>Other comparison results</h3>";
echo "a == b : " . var_export($a == $b, true) . "<br>";
echo "a != b : " . var_export($a != $b, true) . "<br>";
echo "a >= b : " . var_export($a >= $b, true) . "<br>";
echo "a <= b : " . var_export($a <= $b, true) . "<br>";
?>
</body>
</html>