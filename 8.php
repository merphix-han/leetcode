<?php 
/**
 * Implement atoi which converts a string to an integer.

The function first discards as many whitespace characters as necessary until the first non-whitespace character is found. Then, starting from this character, takes an optional initial plus or minus sign followed by as many numerical digits as possible, and interprets them as a numerical value.

The string can contain additional characters after those that form the integral number, which are ignored and have no effect on the behavior of this function.

If the first sequence of non-whitespace characters in str is not a valid integral number, or if no such sequence exists because either str is empty or it contains only whitespace characters, no conversion is performed.

If no valid conversion could be performed, a zero value is returned.

Note:

Only the space character ' ' is considered as whitespace character.
Assume we are dealing with an environment which could only store integers within the 32-bit signed integer range: [−231,  231 − 1]. If the numerical value is out of the range of representable values, INT_MAX (231 − 1) or INT_MIN (−231) is returned.
 */
class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        $str = trim($str);
        $len = strlen($str);
        $num = 0;
        $new_str = '';
        if($str[0]=='+'||$str[0]=='-'){
            $new_str .= $str[0];
            $str = substr($str,1);
        }
        for ($i=0; $i < $len; $i++) { 
            if(is_numeric($str[$i])){
                $new_str .= $str[$i];
            }else{
                break;
            }
        }
        if($new_str>(pow(2,31)-1)){
            return pow(2,31)-1;
        }else if($new_str<pow(-2,31)){
            return pow(-2,31);
        }else{
            return intval($new_str);
        }
    }
}
$s = new Solution();
$rs = $s->myAtoi("   -115579378-25");
var_dump($rs);