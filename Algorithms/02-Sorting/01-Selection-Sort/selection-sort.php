<?php

final class SelectionSort
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
            // Find the minimum element in unsorted array
            $min_indx = $i;

            for ($j = $i + 1; $j < $data_length; $j++) {
                if ($data[$j] < $data[$min_indx]) {
                    $min_indx = $j;
                }
            }

            // Swap the found minimum element with the first element
            $temp = $data[$min_indx];
            $data[$min_indx] = $data[$i];
            $data[$i] = $temp;
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

$result = SelectionSort::sort($data);

echo 'Sorted array: ' . json_encode($result);
