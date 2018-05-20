<?php

/**
 * Recursive implementation of Binary Search
 */
class BinarySearch
{
    public static function search(array $data, int $left, int $right, int $elem)
    {
        if ($right >= $left) {
            $mid = round($left + ($right - $left) / 2);

            if ($data[$mid] === $elem) {
                return $mid;
            }

            if ($data[$mid] > $elem) {
                return static::search($data, $left, $mid - 1, $elem);
            }

            return static::search($data, $mid + 1, $right, $elem);
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

$start = 0;
$end = count($data) - 1;

$result = BinarySearch::search($data, $start, $end, $elem);

if ($result !== -1) {
    echo 'Element found at index: ' . $result;
} else {
    echo 'Sorry! Element not found.';
}
