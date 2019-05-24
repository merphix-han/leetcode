<?php
/**
 * Given a string s, find the longest palindromic substring in s. You may assume that the maximum length of s is 1000.

Example 1:

Input: "babad"
Output: "bab"
Note: "aba" is also a valid answer.
Example 2:

Input: "cbbd"
Output: "bb"
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $len = strlen($s);
        $new_str = '';
        for ($i=0; $i < $len; $i++) { 
            $num = $i+1>$len/2?($len-$i-1):$i;
            echo $num;
            $str = $s[$i];
            for ($j=1; $j <= $num; $j++) { 
                $flag = true;
                $start =$end = $i;
                if(($s[$i-$j]==$s[$i]||$s[$i+$j]==$s[$i])&&$flag){
                    if($s[$i-$j]==$s[$i]){
                         $start = $s[$i-$j];
                         $str  = $s[$i].$str;
                    }
                    if($s[$i+$j]==$s[$i]){
                         $end = $s[$i+$j];
                        $str  = $s[$i].$str;
                    }
                }else if(isset($s[$start-$j])&&$s[$end+$j]&&$s[$start-$j]==$s[$end+$j]){
                    $str = $s[$start-$j].$str.$s[$end+$j];
                    $flag = false;
                }
                if(strlen($str)>$new_str) $new_str = $str;
                continue;
                
            }
        }
        return $new_str;
    }
}
$solution  = new Solution;
$result = $solution->longestPalindrome('cc');
var_dump($result);