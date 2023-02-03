<?php

function fibonacci($n)
{
    if ($n <= 0) {
        return 0;
    }
    $previous = 0;
    $current = 1;
    for ($i = 1; $i < $n; $i++) {
        $temp = $current + $previous;
        $previous = $current;
        $current = $temp;
    }
    return $current;
}

$int = (int)readline('Input: ');

echo "Output: ";
for ($i = 0; $i <= $int - 1; $i++) {
    echo fibonacci($i) . " ";
}
