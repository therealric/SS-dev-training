<?php

// As a loop
function fibonacci()
{
    $number1 = 0;
    $number2 = 1;
    $result = 0;

    echo $number1 . ", ";
    echo $number2;

    while ($result < 34) {
        $result = $number1 + $number2;

        $number1 = $number2;
        $number2 = $result;

        echo  ", " . $result;
    }
}

fibonacci();


// As a recursive function
function fib($number1 = 0, $number2 = 1)
{
    echo $number1 . ", ";
    if ($number1 >= 34) {
        return;
    }
    fib($number2, $number1 + $number2);
}

fib();
