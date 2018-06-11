### Exponential Search

> The idea is to start with subarray size 1, compare its last element with `elem`, then try size 2, then 4 and so on until last element of a subarray is not greater.
Once we find an index i (after repeated doubling of i), we know that the element must be present between i/2 and i (`Why i/2?` because we could not find a greater value in previous iteration).

- `STEP 1`: Find range where element is present.
- `Step 2`: Do Binary Search in above found range.

##### Important points:

- Works only sorted arrays.
