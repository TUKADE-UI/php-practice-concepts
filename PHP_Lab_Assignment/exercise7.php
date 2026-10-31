<?php
// Exercise 7: Associative Arrays
?>
<!DOCTYPE html>
<html>
<head><title>Exercise 7</title></head>
<body>
<h2>Exercise 7: Associative Arrays</h2>
<?php
// 1 & 2. Associative array
$student = array(
    "id"         => "C1230926",
    "name"       => "Abdinasir Adan Tukade",
    "age"        => 21,
    "department" => "Computer Science",
    "gpa"        => 3.65
);

// 3. Name and department
echo "Name: " . $student["name"] . "<br>";
echo "Department: " . $student["department"] . "<br>";

// 4. foreach with keys and values
echo "<h3>All keys and values</h3>";
foreach ($student as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}

// 5. var_dump()
echo "<h3>Array structure (var_dump)</h3><pre>";
var_dump($student);
echo "</pre>";
?>
</body>
</html>