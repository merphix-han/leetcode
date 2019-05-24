<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        if(empty($nums)) return false;
        $mid = [];
        foreach($nums as  $key=>$value){
            if(isset($mid[$value])){
                return [$mid[$value],$key];
            }else{
                $mid[$target-$value] = $key;
            }
        }
    }
}
$Solution = new Solution();
var_dump($Solution->twoSum([2,7,11,15],9));