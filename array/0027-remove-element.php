<?php

class Solution
{

    /**
     * @param int[] $nums
     */
    function removeElement(array &$nums, int $val): int
    {
        $nums = array_filter($nums, fn (int $num) => $num !== $val);
        return count($nums);
    }

}
