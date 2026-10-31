<?php
// Exercise 3: Conditional Statements
?>
<!DOCTYPE html>
<html>
<head><title>Exercise 3</title></head>
<body>
<h2>Exercise 3: Grade Calculator</h2>
<p>Student: Abdinasir Adan Tukade (C1230926)</p>
<?php
// Test with different marks
$testMarks = [95, 83, 71, 64, 45];

foreach ($testMarks as $marks) {
    if ($marks >= 90 && $marks <= 100) {
        $grade = "A";
    } elseif ($marks >= 80) {
        $grade = "B";
    } elseif ($marks >= 70) {
        $grade = "C";
    } elseif ($marks >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo "Marks: $marks &rarr; Grade: <b>$grade</b><br>";
}
?>
</body>
</html>