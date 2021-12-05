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
        //If the array contains only one value by definition that value is unique
        if(count($nums) < 3) {
            return count($nums);
        }

        $last_inserted = 1;

        //Because it's in ascending order, index 0 and 1 will always be the first unique numbers. Start from index 2.
        for($index = 2; $index < count($nums); $index++) {

            $existing_occurrences = 0;

            //run through inserted values to check how many we already have
            for($iv = 0; $iv <= $last_inserted; $iv++) {
                if($nums[$iv] == $nums[$index]) {
                    $existing_occurrences++;
                }
            }

            if($existing_occurrences <= 1) {
                $last_inserted++;
                $nums[$last_inserted] = $nums[$index];
            }
        }

        return $last_inserted + 1;
    }
}

$test = [1,1,1,2,2,3];
$s = new Solution();
print_r($s->removeDuplicates($test));

?>