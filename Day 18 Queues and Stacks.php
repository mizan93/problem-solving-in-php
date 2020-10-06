<?php

class Solution {
    // Write your code here
    public $stact=[];
    public $stact_head=0;
    public $queue=[];
    public $queue_heade=-1;
    public function pushCharacter($s){
        array_push($this->stact,$s);
    }
    public function popCharacter(){
$result=$this->stact[$this->stact_head];
$this->stact_head++;
return $result;
    }
    public function enqueueCharacter($s){
        $this->queue_heade++;
        array_push($this->queue,$s);
    }
    public function dequeueCharacter(){
        $result=$this->queue[$this->queue_heade];
        $this->queue_heade--;
        return $result;
    }
}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
    	
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>