<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            $searchNum = $target - $nums[$i]; 
            if (isset($inums[$searchNum])) {
                return [$i, $inums[$searchNum]];
            }
            $inums[$nums[$i]] = $i;
        }
        return [];
    }
}

