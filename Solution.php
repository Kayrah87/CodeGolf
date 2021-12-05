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
        //Array must be sorted in place - zero memory usage. array_unique produced a new array. Rethink.

        //If the array contains only one value by definition that value is unique
        if(count($nums) == 1) {
            return 1;
        }

        $last_inserted = 0;

        //Because it's in ascending order, index 0 will always be the first unique number. Start from index 1.
        for($index = 1; $index < count($nums); $index++) {
            if($nums[$index] !== $nums[$index-1]) {
                $nums[$last_inserted + 1] = $nums[$index];
                $last_inserted++;
            }
        }

        return $last_inserted + 1;
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