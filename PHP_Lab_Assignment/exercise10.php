<?php
// Exercise 10: User-Defined Functions

// 1. greetStudent(): displays a welcome message
function greetStudent($studentName) {
    echo "Welcome to Jamhuuriya University, $studentName!<br>";
}

// 2. calculateSum(): returns the sum of two numbers
function calculateSum($a, $b) {
    return $a + $b;
}

// 3. factorial(): calculates factorial of a number
function factorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// 4. Function with a default parameter value
function introduce($name = "Guest") {
    echo "Hello, $name! Nice to meet you.<br>";
}

// 5. Pass by value vs pass by reference
function addTenByValue($num) {
    $num = $num + 10;
    return $num;
}
function addTenByReference(&$num) {
    $num = $num + 10;
}
?>
<!DOCTYPE html>
<html>
<head><title>Exercise 10</title></head>
<body>
<h2>Exercise 10: User-Defined Functions</h2>
<p>Student: Abdinasir Adan Tukade (C1230926)</p>
<?php
// 6. Display results of all function calls
echo "<h3>1. greetStudent()</h3>";
greetStudent("Abdinasir Adan Tukade");

echo "<h3>2. calculateSum()</h3>";
echo "Sum of 25 and 17 = " . calculateSum(25, 17) . "<br>";

echo "<h3>3. factorial()</h3>";
echo "Factorial of 5 = " . factorial(5) . "<br>";
echo "Factorial of 7 = " . factorial(7) . "<br>";

echo "<h3>4. Default parameter</h3>";
introduce();                        // without argument
introduce("Abdinasir");             // with argument

echo "<h3>5. Pass by value and by reference</h3>";
$value = 5;
echo "Original value: $value<br>";
$returned = addTenByValue($value);
echo "After pass by value: \$value = $value (function returned $returned)<br>";
addTenByReference($value);
echo "After pass by reference: \$value = $value<br>";
?>
</body>
</html>