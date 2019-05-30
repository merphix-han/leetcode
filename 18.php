<?php
/**
 * Given an array nums of n integers and an integer target, are there elements a, b, c, and d in nums such that a + b + c + d = target? Find all unique quadruplets in the array which gives the sum of target.

Note:

The solution set must not contain duplicate quadruplets.

Example:

Given array nums = [1, 0, -1, 0, -2, 2], and target = 0.

A solution set is:
[
  [-1,  0, 0, 1],
  [-2, -1, 1, 2],
  [-2,  0, 0, 2]
]
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        $result = [];
        $len = count($nums);
        if(empty($nums)||$len<4) return $result;
        sort($nums); //sort 
        for ($i=0; $i < $len-3; $i++) { 
            if($i>0&&$nums[$i]==$nums[$i-1]) continue;
            if($nums[$i]+$nums[$i+1]+$nums[$i+2]+$nums[$i+3]>$target) break;
            for ($j=$len-1; $j >$i+2 ; $j--) { 
                if($j<$len-1&&$nums[$j]==$nums[$j+1]) continue;
                if($nums[$i]+$nums[$j]+$nums[$j-1]+$nums[$j-2]<$target) break;
                if($nums[$i]+$nums[$i+1]+$nums[$i+2]+$nums[$j]>$target) continue;
                $ii = $i+1;
                $jj = $j-1;
                while ($ii<$jj) {
                    $sum = $nums[$i]+$nums[$ii]+$nums[$jj]+$nums[$j];
                    if($sum<$target){
                        $ii++;
                    }else if($sum>$target){
                        $jj--;
                    }else{
                        $result[] = [$nums[$i],$nums[$ii],$nums[$jj],$nums[$j]];
                        while ($jj>$ii&&$nums[$ii]==$nums[++$ii]) {
                            # code...
                        }
                        while($jj>$ii&&$nums[$jj]==$nums[--$jj]){

                        }
                    }
                }
            }
        }
        return $result;

    }
}
$solution = new Solution; 
$rs = $solution->fourSum([1, 0, -1, 0, -2, 2],0);
var_dump($rs);