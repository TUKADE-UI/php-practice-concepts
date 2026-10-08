<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

for ($i = 1; $i <= 12; $i++) {

    for ($j = 1; $j <= 12; $j++) {

        echo $i . " x " . $j . " = " . ($i * $j) . "<br>";

    }

    echo "<br>";

}

?>
</body>
</html>