<?php

function sumOfNeighbors($matrix, $row, $col)
{
    $sum = 0;
    $rowCount = count($matrix);
    $colCount = count($matrix[0]);


    if ($col > 0) {
        $sum += $matrix[$row][$col - 1];
    }


    if ($col < $colCount - 1) {
        $sum += $matrix[$row][$col + 1];
    }


    if ($row > 0) {
        $sum += $matrix[$row - 1][$col];
    }


    if ($row < $rowCount - 1) {
        $sum += $matrix[$row + 1][$col];
    }

    return $sum;
}


$matrix = [
    [51, 71, 1, 50],
    [13, 5, 19, 11],
    [60, 4, 11, 20],
    [13, 34, 17, 0],
    [16, 53, 1, 32]
];

echo sumOfNeighbors($matrix, 0, 0).'<br>';
echo sumOfNeighbors($matrix, 3, 2);
