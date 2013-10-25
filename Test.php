<?php
include 'RankHand.php';
print((rankHand(['6S','4S'],['3S','7D','8C','9H','2C'])==0?'Passed nothing good':'Failed nothing good').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==1?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],['3S','AD','8C','9H','2C'])==2?'Passed one pair':'Failed one pair').'<br>');
print((rankHand(['AS','AD'],['3S','7D','8C','9H','2C'])==2?'Passed one pair':'Failed one pair').'<br>');
/*print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==3?'Passed two pair':'Failed two pair').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==4?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==5?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==6?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==7?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==8?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==9?'Passed high card':'Failed high card').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==10?'Passed high card':'Failed high card').'<br>');*/
?>