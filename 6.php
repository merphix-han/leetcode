<?php
/**
 * The string "PAYPALISHIRING" is written in a zigzag pattern on a given number of rows like this: (you may want to display this pattern in a fixed font for better legibility)

P   A   H   N
A P L S I I G
Y   I   R
And then read line by line: "PAHNAPLSIIGYIR"

Write the code that will take a string and make this conversion given a number of rows:

string convert(string s, int numRows);
Example 1:

Input: s = "PAYPALISHIRING", numRows = 3
Output: "PAHNAPLSIIGYIR"
Example 2:

Input: s = "PAYPALISHIRING", numRows = 4
Output: "PINALSIGYAHRPI"
Explanation:
P     I    N
A   L S  I G
Y A   H R
P     I
 */
class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $result = [];
        if($numRows==1){
            return $s;
        }
        $numRows = $numRows - 1;
        $flag = true;
        for ($i=0; $i < strlen($s); $i++) { 
            if($flag){
                if($i%$numRows==0){
                     $result[$numRows][] = $s[$i];
                     $flag = false;
                }else{
                    $result[$i%$numRows][] = $s[$i];
                } 
            }else{
                if($i%$numRows==0){
                     $result[0][] = $s[$i];
                     $flag = true;
                }else{
                    $result[$numRows-$i%$numRows][] = $s[$i];
                } 
                
            }
        }
        $new_str = '';
        foreach($result as $v){
            $new_str .= implode('',$v);
        }
        return $new_str;
    }   
}
$s = new Solution();
$rs = $s->convert("PAYPALISHIRING",3);
var_dump($rs);