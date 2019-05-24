<?php
/**
 * Given an input string (s) and a pattern (p), implement regular expression matching with support for '.' and '*'.

'.' Matches any single character.
'*' Matches zero or more of the preceding element.
The matching should cover the entire input string (not partial).

Note:

s could be empty and contains only lowercase letters a-z.
p could be empty and contains only lowercase letters a-z, and characters like . or *.
 */

class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    // function isMatch($s, $p) {
    //     if($p===''&&$s===''){ // s or p could be empty
    //         return true;
    //     }else if($p===''||$s===''){
    //         return false;
    //     }
    //     $curr_str = '';
    //     $len = strlen($s);
    //     $j = 0;
    //     for ($i=0; $i < $len; $i++) { 
    //         $curr_str = $s[$i];
    //         if(!isset($p[$j])){
    //             return false;
    //         }
    //         if($p[$j]==='*'){
    //             if($j==0){
    //                 return false;
    //             }
    //             $curr_str = $p[$j-1];
    //         }else if($p[$j]==='.'){
    //             $j +=1;
    //             $i += 2;
    //         }else{
    //             $curr_str = $p[$j];
    //         }
    //         if($s[$i]==$curr_str){
    //             continue;
    //         }else {
    //             return false;
    //         }
    //     }
    //     return true;
    // }
    function isMatch($s,$p){
        $curr_str = '';
        while($s&&$p){
            if($p[-1]=='.'){
                $curr_str = '.';
                $s = substr($s,0,-1);
                $p = substr($p,0,-1);
            }else if($p[-1]=='*'){
                if($s[-1]==$curr_str||$curr_str=='.'){
                    $s = substr($s, 0,-1);
                 }else{
                    $p = substr($p, 0,-1);
                 }
               
            }else{
                $curr_str = $s[-1];
                if($s[-1]!=$p[-1]){
                    if($p[-1]=='*'){
                        $p = substr($p, 2);
                    }else{
                        return false;
                    }
                    
                }else{
                    $s = substr($s,0,-1);
                    $p = substr($p,0,-1);
                }
            }
        }
        if(!$s&&(!$p||$p[0]=='*')){
            return true;
        }
        return false;
    }
}
$s = new Solution();
$rs = $s->isMatch('aaaaab','c*a*b');
var_dump($rs);