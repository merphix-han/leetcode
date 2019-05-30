<?php
/**
 * Given an array nums of n integers, are there elements a, b, c in nums such that a + b + c = 0? Find all unique triplets in the array which gives the sum of zero.

Note:

The solution set must not contain duplicate triplets.

Example:

Given array nums = [-1, 0, 1, 2, -1, -4],

A solution set is:
[
  [-1, 0, 1],
  [-1, -1, 2]
]
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    /*function threeSum($nums) {
        $count = count($nums);
        if($count<3) return [];
        $array = [];
        $one_nums = [];
        $two_nums = [];
        $three_nums = [];
        $t =0;
        for ($i=0; $i < $count; $i++) { 

            if(!isset($one_nums[$nums[$i]])){
                $one_nums[$nums[$i]] = $nums[$i];
            }else if(!isset($two_nums[$nums[$i]])&&$nums[$i]!=0){
                $two_nums[$nums[$i]] = $nums[$i];
            }
            if($nums[$i]==0) $t +=1;
            if($t == 3 && $nums[$i]==0) $array[] = [0,0,0];
        }
        $new_one_nums  =array_values($one_nums);
        $unique = array_flip($new_one_nums);
        for ($i=0; $i < count($new_one_nums); $i++) {
            $two_num =  -$new_one_nums[$i]/2;
            if($new_one_nums[$i]%2==0&&$new_one_nums[$i]!=$two_num &&isset( $two_nums[$two_num])){
                $array[] = [$new_one_nums[$i],$two_nums[$two_num],$two_nums[$two_num]];
            }
            for ($j=$i+1; $j < count($new_one_nums); $j++) { 
                $num = $new_one_nums[$i]+$new_one_nums[$j];
                if(isset($one_nums[-$num])&&$unique[-$num]>$j){
                    $array[] = [$new_one_nums[$i],$new_one_nums[$j],-$num];
                }
            }
            unset($one_nums[$new_one_nums[$i]]);
        }
        return $array;
    }*/
    // function threeSum($nums){
    //     $new_nums = array_count_values($nums);
    //     $array = [];
    //     if(isset($new_nums[0])&&$new_nums[0]>2){
    //         $array[] = [0,0,0];
    //     }
    //     $len = count($new_nums);
    //     $m = 0;

    //     $new_one_nums = array_keys($new_nums);
    //     $unique = array_flip($new_one_nums);
    //     var_dump($unique);
    //     for ($i=0; $i < count($new_one_nums); $i++) {
    //         $key = $new_one_nums[$i];
    //         if($new_nums[$key]>1&&$key!=0){
    //             if(isset($new_nums[-2*$key])){
    //                 $array[] = [$key,$key,-2*$key];
    //             }
    //         }
    //         for ($j=$i+1; $j < count($new_one_nums); $j++) { 
    //             $num = $new_one_nums[$i]+$new_one_nums[$j];
    //             if(isset($one_nums[-$num])&&$unique[-$num]>$j){
    //                 $array[] = [$new_one_nums[$i],$new_one_nums[$j],-$num];
    //                 break;
    //             }
    //         }
    //     }
    //     return $array;  
    // }
}

$solution = new Solution; 
$rs = $solution->threeSum([-4,-2,-2,-2,0,1,2,2,2,3,3,4,4,6,6]);
var_dump($rs);