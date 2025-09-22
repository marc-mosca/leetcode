<?php

class Solution
{

    /**
     * @param int[] $nums
     */
    function removeDuplicates(array &$nums): int
    {
        $length = count($nums);

        if ($length === 0)
        {
            return 0;
        }

        $i = 0;

        for ($j = 0; $j < $length; $j++)
        {
            if ($nums[$i] !== $nums[$j])
            {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        $nums = array_slice($nums, 0, $i + 1);
        return count($nums);
    }

}
