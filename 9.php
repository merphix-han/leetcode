<?php
/**
 * Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.
 */

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $len = strlen($x);
        $f = $len%2;
        $x = (string)$x;
        if($f==1){
            $start = intval($len/2);
            for ($i=$start; $i >=0 ; $i--) { 
                if($x[$start-$i]!=$x[$start+$i]){
                    return false;
                }
            }
        }
        if($f==0){
            $start = intval($len/2)-1;
            for ($i=$start; $i >=0 ; $i--) { 
                if($x[$start-$i]!=$x[$start+$i+1]){
                    return false;
                }
            }
        }
        return true;
    }
}
$s = new Solution();
$rs = $s->isPalindrome(123321);
var_dump($rs);