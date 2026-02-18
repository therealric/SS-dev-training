<?php

// As a loop
function addAll1($Array)
{
    $result = 0;

    while (count($Array) > 0) {
        $result += array_sum($Array);

        array_splice($Array, 0, 1);
    }

    return $result;
}

// As a recursive function
function addAll2($Array)
{
    if (count($Array) === 0) {
        return 0;
    }

    $result = array_sum($Array) + addAll2(array_slice($Array, 1));

    return $result;
}

$Array = [1,1,1,1,1];  //5+4+3+2+1=15

echo "As a loop: " . addAll1($Array) . ", As a recursive function: " . addAll2($Array);
