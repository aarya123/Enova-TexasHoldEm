<?php
include 'RankHand.php';
print((rankHand(['6S','4S'],array('3S','7D','8C','9H','2C'))==0?'Passed nothing good':'Failed nothing good').'<br>');
print((rankHand(['AS','4S'],array('3S','7D','8C','9H','2C'))==1?'Passed high card':'Failed high card').'<br>');
/*print((rankHand(['AS','4S'],['AH','5S','7C'])==2?'Passed one pair':'Failed one pair').'<br>');
print((rankHand(['AS','4S'],array())==3?'Passed two pair':'Failed two pair').'<br>');
print((rankHand(['AS','4S'],array())==4?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],array())==5?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],array())==6?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],array())==7?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],array())==8?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],array())==9?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],array())==10?'Passed high card':'Failed high card').'<br>');*/
?>