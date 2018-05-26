<?php

class LinearSearch
{
    public static function search(array $data, int $elem) : int
    {
        $data_length = count($data);

        for ($i = 0; $i < $data_length; $i++) { 
            if ($data[$i] === $elem) {
                return $i;
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

$result = LinearSearch::search($data, $elem);

if ($result !== -1) {
    echo 'Element found at index: ' . $result;
} else {
    echo 'Sorry! Element not found.';
}
