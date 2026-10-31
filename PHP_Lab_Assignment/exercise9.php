<?php
// Exercise 9: PHP Array Functions
?>
<!DOCTYPE html>
<html>
<head><title>Exercise 9</title></head>
<body>
<h2>Exercise 9: PHP Array Functions</h2>
<p>Student: Abdinasir Adan Tukade (C1230926)</p>
<?php
// 1 & 2. Original array
$numbers = array(45, 12, 78, 23, 90, 34);
echo "<h3>Original array</h3>";
echo implode(", ", $numbers) . "<br>";

// 3. sort() ascending
$asc = $numbers;
sort($asc);
echo "<h3>Ascending order (sort)</h3>";
echo implode(", ", $asc) . "<br>";

// 4. rsort() descending
$desc = $numbers;
rsort($desc);
echo "<h3>Descending order (rsort)</h3>";
echo implode(", ", $desc) . "<br>";

// 5. max() and min()
echo "<h3>Highest and lowest</h3>";
echo "Highest value: " . max($numbers) . "<br>";
echo "Lowest value: " . min($numbers) . "<br>";

// 6. in_array()
echo "<h3>Search for 78</h3>";
if (in_array(78, $numbers)) {
    echo "The value 78 exists in the array.<br>";
} else {
    echo "The value 78 does not exist in the array.<br>";
}

// 7. count()
echo "<h3>Number of elements</h3>";
echo "Total elements: " . count($numbers) . "<br>";
?>
</body>
</html>