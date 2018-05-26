### Interpolation Search

> The Interpolation Search is an improvement over Binary Search for instances, where the values in a sorted array are uniformly distributed. Binary Search always goes to the middle element to check. On the other hand, interpolation search may go to different locations according to the value of the key being searched. For example, if the value of the key is closer to the last element, interpolation search is likely to start search toward the end side.

- `STEP 1`: In a loop, calculate the value of `pos` using the probe position formula.
- `Step 2`: If it is a match, return the index of the item, and exit.
- `Step 3`: If the item is less than `$data[$pos]`, calculate the probe position of the left sub-array. Otherwise calculate the same in the right sub-array.
- `Step 4`: Repeat until a match is found or the sub-array reduces to zero.

##### Important points:

- Works only sorted arrays.
