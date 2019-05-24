<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        $arr = '';
        $start = $new_len = 0;
        for ($i=0; $i < $len; $i++) { 
            $j = $i;
            while($j>=$start){
                if(!$arr){
                    $arr .= $s[$j];
                    $j--;
                }else if(strpos($arr,$s[$j])===false){
                    $arr .= $s[$j];
                    $j--;
                }else{
                    $start = $j--;
                }
            }
            $count_arr = strlen($arr);
            $arr = '';
            $new_len = $new_len>$count_arr?$new_len:$count_arr;
        }
        return $new_len;
    }
}
$solution = new Solution();
$rs = $solution->lengthOfLongestSubstring("pppp");
var_dump($rs);