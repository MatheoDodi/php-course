<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php

        //STRINGS//
    $example = "Hello World";

    // turns string to all lowercase
    echo strtolower($example);
    // turns string to all uppercase
    echo strtoupper($example);
    //displays length of string
    echo strlen($example);
    //replaces the first word(first arg) with the second(second arg)
    // in the given string(thrid arg)
    echo str_replace("Hello", "Goodbye", $example);
    echo substr($example,3 , 3);

        //NUMBERS//
    $num = 1;

    //adding 1 to the number
    $num++; // 2
    //absolute value
    $num = -100;
    abs($num); // 100
    //raising the number to the n power
    $num = 2;
    pow($num, 2); // 4
    //square root of the number
    $num = 9;
    sqrt($num);

    ?>


</body>
</html>