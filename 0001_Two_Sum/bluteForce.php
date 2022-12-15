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
            for ($j = $i + 1; $j < $count; $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                } 
            }
        }
        return [];
    }
}

