<?php

class Solution
{

    /**
     * @param int[] $nums1
     * @param int[] $nums2
     */
    function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        assert(count($nums1) === ($m + $n));

        $nums1 = array_slice($nums1, 0, $m);
        $nums1 = array_merge($nums1, $nums2);
        sort($nums1);
    }

}
