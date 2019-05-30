<?php
/**
 * Given a linked list, remove the n-th node from the end of list and return its head.

Example:

Given linked list: 1->2->3->4->5, and n = 2.

After removing the second node from the end, the linked list becomes 1->2->3->5.
Note:

Given n will always be valid.

Follow up:

Could you do this in one pass?
 */

class ListNode {
     public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
 
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {

        $dummy = new ListNode(0);
        $dummy->next = $head;
        $prev = $dummy;
        $fast = $slow = $head;
        while($n-- > 1){
            $fast = $fast->next;
        }
        while($fast->next !== null){
            $fast = $fast->next;
            $slow = $slow->next;
            $prev = $prev->next;
        }
        $prev->next = $slow->next;
        return $dummy->next;
    }
}
$a = new ListNode(1);
$b = new ListNode(2);
$c = new ListNode(3);
$d = new ListNode(4);
$e = new ListNode(5);
$d->next = $e;
$c->next = $d;
$b->next = $c;
$a->next = $b;
$solution = new Solution; 
$rs = $solution->removeNthFromEnd($a,2);
var_dump($rs);