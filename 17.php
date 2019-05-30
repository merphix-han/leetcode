<?php

/**
 * Given a string containing digits from 2-9 inclusive, return all possible letter combinations that the number could represent.

A mapping of digit to letters (just like on the telephone buttons) is given below. Note that 1 does not map to any letters.



Example:

Input: "23"
Output: ["ad", "ae", "af", "bd", "be", "bf", "cd", "ce", "cf"].
 */
class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $s = [
            2=>['a','b','c'],
            3=>['d','e','f'],
            4=>['g','h','i'],
            5=>['j','k','l'],
            6=>['m','n','o'],
            7=>['p','q','r','s'],
            8=>['t','u','v'],
            9=>['w','x','y','z']
        ];
        if(strlen($digits)==0) return [];
        if(strlen($digits)==1) return $s[$digits];
        $a = array_chunk($s[$digits[0]],1);
        $i = 1;
        while(isset($digits[$i])){
            $r = [];
            $b = array_chunk($s[$digits[$i]],1);
            foreach($a as $v){
                foreach($b as $vv){
                    $r[] =array_merge($v,$vv);
                }
            }
            $a = $r;
            $i++;
        }
        foreach($a as $k=>$v){
            $a[$k] = implode($v, '');
        }
        return $a;
    }
}
$solution = new Solution; 
$rs = $solution->letterCombinations('564548888');
var_dump($rs);