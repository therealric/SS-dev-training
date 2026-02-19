<?php

// As a loop
function fibonacci()
{
    $number1 = 0;
    $number2 = 1;
    $result = 0;

    while ($result <= 34) {
        echo $result . ", ";

        if ($result === 0) {
            echo $number2 . ", ";
        }

        $result = $number1 + $number2;

        $number1 = $number2;
        $number2 = $result;
    }
}

fibonacci();
