<?php

class InterpolationSearch
{
    public static function search(array $data, int $elem) : int
    {
        $lo = 0;
        $hi = count($data) - 1;

        while ($lo < $hi && $elem >= $data[$lo] && $elem <= $data[$hi] ) {
            $pos = $lo + ( ($hi - $lo) / ($data[$hi] - $data[$lo]) ) * ( $elem - $data[$lo] );

            if ($data[$pos] === $elem) {
                return $pos;
            }

            if ($data[$pos] < $elem) {
                $lo = $pos + 1;
            } else {
                $hi = $pos - 1;
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

$result = InterpolationSearch::search($data, $elem);

if ($result !== -1) {
    echo 'Element found at index: ' . $result;
} else {
    echo 'Sorry! Element not found.';
}
