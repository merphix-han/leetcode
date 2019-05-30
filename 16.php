<?php

/**
 * 3Sum Closest
 * Given an array nums of n integers and an integer target, find three integers in nums such that the sum is closest to target. Return the sum of the three integers. You may assume that each input would have exactly one solution.

Example:

Given array nums = [-1, 2, 1, -4], and target = 1.

The sum that is closest to the target is 2. (-1 + 2 + 1 = 2).
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        $len = count($nums);
        $new = [];
        for($i=0;$i<$len-1;$i++){
            for($j=$i+1;$j<$len;$j++){
                $new[$j.'_'.$i] = [$i,$nums[$i]+$nums[$j]];
            }
        }
        $result = [];
        foreach ($new as $key => $value) {
            for($k=explode('_',$key)[0]+1;$k<$len;$k++){
                $k1 = abs($target-$value[1]-$nums[$k]);
                $value1 = $value[1]+$nums[$k];
                if(!isset($result[0])){
                    $result[0] = $k1;
                    $result[1] = $value1;
                }else if($k1<$result[0]){
                    $result[0] = $k1;
                    $result[1] = $value1;
                }
                if($k1===0){
                    return $result[1];
                }
            }
        }
        return $result[1];
    }
}
$solution = new Solution; 
$rs = $solution->threeSumClosest([1,2,4,8,16,32,64,128],82);
var_dump($rs);