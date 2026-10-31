<?php
// Exercise 6: Numerically Indexed Arrays
?>
<!DOCTYPE html>
<html>
<head><title>Exercise 6</title></head>
<body>
<h2>Exercise 6: Indexed Arrays</h2>
<p>Student: Abdinasir Adan Tukade (C1230926)</p>
<?php
// 1. Create indexed array
$fruits = array("Apple", "Banana", "Mango", "Orange", "Grape");

// 2. First and last elements
echo "First element: " . $fruits[0] . "<br>";
echo "Last element: " . $fruits[count($fruits) - 1] . "<br>";

// 3. for loop
echo "<h3>Using for loop</h3>";
for ($i = 0; $i < count($fruits); $i++) {
    echo ($i + 1) . ". " . $fruits[$i] . "<br>";
}

// 4. foreach loop
echo "<h3>Using foreach loop</h3>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// 5. count()
echo "<h3>Total elements</h3>";
echo "Total number of fruits: " . count($fruits) . "<br>";

// 6. print_r()
echo "<h3>Array structure (print_r)</h3><pre>";
print_r($fruits);
echo "</pre>";
?>
</body>
</html>