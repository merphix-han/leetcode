<?php
/**
 * Given a 32-bit signed integer, reverse digits of an integer.

Example 1:

Input: 123
Output: 321
Example 2:

Input: -123
Output: -321
Example 3:

Input: 120
Output: 21
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if($x>=0){
            $num =  strrev($x);
        }else{
            $num = -strrev(substr($x,1));
        }
        if($num>(pow(2,31)-1)||$num<(pow(-2,31))){
            return 0;
        }else{
            return intval($num);
        }
    }
}
$s = new Solution();
$rs = $s->reverse(-1563847412);
var_dump($rs);