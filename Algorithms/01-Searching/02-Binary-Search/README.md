### Binary Search

> Given a sorted array elements to search a given element `elem` in `data array`.

Search a sorted array by repeatedly dividing the search interval in half. Begin with an interval covering the whole array. If the value of the search key is less than the item in the middle of the interval, narrow the interval to the lower half. Otherwise narrow it to the upper half. Repeatedly check until the value is found or the interval is empty.

> We basically ignore half of the elements just after one comparison.

- Compare `elem` with the middle element.
- If `elem` matches with middle element, we return the mid index.
- Else If `elem` is greater than the mid element, then `elem` can only lie in right half subarray after the mid element. So we recur for right half.
Else (`elem` is smaller) recur for the left half.