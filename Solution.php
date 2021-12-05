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
        if(count($nums) == 1) {
            return 1;
        }

        $last_inserted = 0;

        //Because it's in ascending order, index 0 will always be the first unique number. Start from index 1.
        for($index = 1; $index < count($nums); $index++) {

            $existing_occurrences = 0;
            //run through inserted values
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