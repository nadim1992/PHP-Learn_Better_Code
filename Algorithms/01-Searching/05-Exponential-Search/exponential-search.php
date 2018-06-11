<?php

final class ExponentialSearch
{
    public static function search(array $data, int $elem) : int
    {
        $data_length = count($data);

        if ($data[0] === $elem) {
            return 0;
        }

        $i = 1;

        while ($i < $data_length && $data[$i] <= $elem) {
            $i = $i * 2;
        }

        return static::binarySearch($data, $i / 2, min($i, $data_length), $elem);
    }

    public static function binarySearch(array $data, int $left, int $right, int $elem) : int
    {
        if ($right >= $left) {
            $mid = round($left + ($right - $left) / 2);

            if ($data[$mid] === $elem) {
                return $mid;
            }

            if ($data[$mid] > $elem) {
                return static::binarySearch($data, $left, $mid - 1, $elem);
            }

            return static::binarySearch($data, $mid + 1, $right, $elem);
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

$result = ExponentialSearch::search($data, $elem);

if ($result !== -1) {
    echo 'Element found at index: ' . $result;
} else {
    echo 'Sorry! Element not found.';
}
