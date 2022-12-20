<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome(int $x): bool
    {
        return (string) $x === strrev($x);
    }
}

