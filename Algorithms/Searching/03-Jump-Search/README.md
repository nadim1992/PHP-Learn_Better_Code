### Jump search

> Like Binary Search, Jump Search is a searching algorithm for sorted arrays. The basic idea is to check fewer elements (than linear search) by jumping ahead by fixed steps or skipping some elements in place of searching all elements.

For example, suppose we have an array `data` of size `data_legth` and block (to be jumped) size `m`. Then we search at the indexes `$data[0], $data[m], $data[2m].....$data[km]` and so on. Once we find the interval `($data[km] < $elem < $data[(k+1)m])`, we perform a linear search operation from the index `km` to find the element `elem`.

Let’s consider the following array: `(0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610)`. Length of the array is 16. Jump search will find the value of 55 with the following steps assuming that the block size to be jumped is `4`.

- `STEP 1`: Jump from index 0 to index 4;
- `STEP 2`: Jump from index 4 to index 8;
- `STEP 3`: Jump from index 8 to index 16;
- `STEP 4`: Since the element at index 16 is greater than 55 we will jump back a step to come to index 9.
- `STEP 5`: Perform linear search from index 9 to get the element 55.

##### Important points:

- Works only sorted arrays.
- Binary Search is better than Jump Search, but Jump search has an advantage that we traverse back only once (Binary Search may require up to `O(Log n)` jumps, consider a situation where the element to be search is the smallest element or smaller than the smallest). So in a systems where jumping back is costly, we use Jump Search.
