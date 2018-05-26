<?php

/**
 * Iterative implementation of Binary Search
 */
class BinarySearch
{
    public static function search(array $data, int $elem) : int
    {
        $left = 0;
        $right = count($data) - 1;

        while ($left <= $right) {
            $mid = round($left + ($right - $left) / 2);

            if ($data[$mid] === $elem) {
                return $mid;
            }

            if ($data[$mid] < $elem) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return -1;
    }
}

/**
 * =================<<<======>>>==============
 * Test
 * ===================!!!!!!==================
 */

$data = [1, 3, 4, 5, 12, 14, 42, 42, 52, 66, 69, 71, 221, 321, 442, 894];
$elem = 66;

$result = BinarySearch::search($data, $elem);

if ($result !== -1) {
    echo 'Element found at index: ' . $result;
} else {
    echo 'Sorry! Element not found.';
}
