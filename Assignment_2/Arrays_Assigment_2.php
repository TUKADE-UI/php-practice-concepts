<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "<table border='1' cellpadding='10' cellspacing='0'>";

// Column headings
echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

// Array elements
foreach ($colors as $row => $columns) {

    echo "<tr>";

    // Row name
    echo "<td>" . $row . "</td>";

    // Column values
    echo "<td>" . $columns["Red"] . "</td>";
    echo "<td>" . $columns["Green"] . "</td>";
    echo "<td>" . $columns["Blue"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>
    
</body>
</html>