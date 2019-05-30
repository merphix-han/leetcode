<?php
/**
 * Given a string containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Note that an empty string is also considered valid.

Example 1:

Input: "()"
Output: true
Example 2:

Input: "()[]{}"
Output: true
Example 3:

Input: "(]"
Output: false
Example 4:

Input: "([)]"
Output: false
Example 5:

Input: "{[]}"
Output: true
 */
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $valid_data = ['{'=>'}','['=>']','('=>')'];
        $arr = [];
        $len = strlen($s);
        for ($i=0; $i < $len; $i++) { 
            if(isset($valid_data[$s[$i]])){
                $arr[] = $s[$i];
            }else if(!empty($arr)&&$valid_data[array_pop($arr)]==$s[$i]){
                continue;
            }else{
                return false;
            }
        }
        if(empty($arr)) return true;
        return false;
    }
}
$solution = new Solution; 
$rs = $solution->isValid('([)]');
var_dump($rs);