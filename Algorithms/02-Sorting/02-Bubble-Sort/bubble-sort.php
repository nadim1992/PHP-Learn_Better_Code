<?php

final class BubbleSort
{
    public static function sort(array $data) : array
    {
        $data_length = count($data);

        /*
         * `$data_length - 1` why?
         * don't need to sort the last item because
         * it has been already sorted when every other element will sort
         *
         *
         * One by one move boundary of unsorted subarray
         */
        for ($i = 0; $i < $data_length - 1; $i++) {
            for ($j = 0; $j < $data_length - $i - 1; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    // Swap the element

                    $temp = $data[$j];
                    $data[$j] = $data[$j + 1];
                    $data[$j + 1] = $temp;
                }
            }
        }

        return $data;
    }
}

/**
 * =================<<<======>>>==============
 * Test
 * ===================!!!!!!==================
 */

$data = [4, 55, 6, 43, 99, 534, 2, 44, 99, 21, 24, 25, 66, 7];

$result = BubbleSort::sort($data);

echo 'Sorted array: ' . json_encode($result);
