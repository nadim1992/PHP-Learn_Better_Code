<?php

final class JumpSearch
{
    public static function search(array $data, int $elem) : int
    {
        $data_length = count($data);

        // Finding block size to be jumped
        $step = floor( sqrt($data_length) );

        $prev = 0;

        while($data[min($step, $data_length) - 1] < $elem) {
            $prev = $step;
            $step += sqrt($elem);

            if ($prev >= $elem) {
                return -1;
            }
        }

        while ($data[$prev] < $elem) {
            $prev++;

            if ($prev === min($step, $elem)) {
                return -1;
            }
        }

        if ($data[$prev] === $elem) {
            return $prev;
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

$result = JumpSearch::search($data, $elem);

if ($result !== -1) {
    echo 'Element found at index: ' . $result;
} else {
    echo 'Sorry! Element not found.';
}
