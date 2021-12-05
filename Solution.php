<?php

class Solution
{

    /**
     * @param  Integer[]  $nums
     *
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        return count(array_values(array_unique($nums)));
    }

    function checkResult($solution, $expectedResult)
    {
        foreach($solution as $index => $integer) {
            if($integer !== $expectedResult[$index]) {
                return "wrong";
            }
        }
        return "Correct";
    }
}

$solution = new Solution();

$test = [0,0,1,1,1,2,2,3,3,4];
$expectedResult = [0,1,2,3,4];

$k = $solution->removeDuplicates($test);
var_dump($k);

?>