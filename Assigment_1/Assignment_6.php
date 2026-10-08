<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$a = 8;
$b = 12;

$max = $a;

if ($b > $max) {
    $max = $b;
}

$lcm = $max;

while (true) {
    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }

    $lcm++;
}

echo "LCM of $a and $b = " . $lcm;

?>
</body>
</html>