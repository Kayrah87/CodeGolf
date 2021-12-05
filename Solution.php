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
        return array_values(array_unique($nums));
    }

    function checkResult($solution, $expectedResult)
    {
        foreach($solution as $index => $integer) {
            echo $integer . " = " . $expectedResult[$index];
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
echo $solution->checkResult($k, $expectedResult) . "\r\n";

$test = [1,1,2];
$expectedResult = [1,2];
$k = $solution->removeDuplicates($test);
echo $solution->checkResult($k, $expectedResult);

?>