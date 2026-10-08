<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
    //Print all elements
    echo "All Elememnts: ";

    foreach ($numbers as $number){
        echo $number.",";
    }
    echo "<br>";
    //variables for totals
    $Total = 0;
    $EvenTotal = 0;
    $OddTotal = 0;


    foreach ($numbers as $number){
        $Total += $number;
        if ($number % 2 == 0){
            $EvenTotal += $number;

        } else{
            $OddTotal += $number;

        }
    }
    echo "Total of All Elements: " . $Total . "<br>";
    echo "Total of Even Elements: " . $EvenTotal . "<br>";
    echo "Total of Odd Elements: " . $OddTotal . "<br>";

    //Find minimum element 
    $min = min($numbers);

    echo "Minimum elements: ".$min . "<br>";
    echo "Position Of minimum: ";

    foreach ($numbers as $position => $number) {
        if ($number == $min){
            echo $position . " , ";

        }
    }
    echo "<br>";

    //
    $max = max($numbers);

    echo "Maximum elements: ".$max . "<br>";
    echo "Position Of maximum : ";

    foreach ($numbers as $position => $number) {
        if ($number == $max){
            echo $position . " ,";

        }
    }
    ?>
    
</body>
</html>