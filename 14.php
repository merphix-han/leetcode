<?php
/**
 * Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

Example 1:

Input: ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
Note:

All given inputs are in lowercase letters a-z.
 */

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $count = count($strs);
        if($count==1) return $strs[0]; 
        if($count==0) return ''; 
        $len0 = strlen($strs[0]);
        $len1 = strlen($strs[1]);
        $len = $len0>$len1?$len1:$len0;
        $str = '';
        for ($i=0; $i < $len; $i++) { 
            if($strs[0][$i]==$strs[1][$i]){
                $str .= $strs[0][$i];
            }else{
                break;
            }
        }
        $j = 2;
        while(isset($strs[$j])&&$str){
            $str_len = strlen($str);
            if(substr($strs[$j],0,$str_len)===$str){
                $j++;
            }else{
                $str = substr($str,0,-1);
            }
        }
        return $str;
        
    }
}
$solution = new Solution;
$rs = $solution->longestCommonPrefix(["dog","racecar","car"]);
var_dump($rs);