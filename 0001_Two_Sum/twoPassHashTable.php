<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        $inums = array_flip($nums);
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            $searchNum = $target - $nums[$i]; 
            if (isset($inums[$searchNum]) && $inums[$searchNum] !== $i) {
                return [$i, $inums[$searchNum]];
            }
        }
        return [];
    }
}

