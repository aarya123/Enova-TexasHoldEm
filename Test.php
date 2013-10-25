<pre>
<?php
include 'RankHand.php';
print((rankHand(['2S','3S'],['4S','9D','6C','7H','8C'])==0?'Passed nothing good':'Failed nothing good').'<br>');
print((rankHand(['AS','3S'],['4S','5D','6C','7H','8C'])==1?'Passed high card':'Failed high card').'<br>');
print((rankHand(['2S','3S'],['2S','5D','6C','7H','8C'])==2?'Passed one pair':'Failed one pair').'<br>');
print((rankHand(['2S','2S'],['4S','5D','6C','7H','8C'])==2?'Passed one pair':'Failed one pair').'<br>');
print((rankHand(['2S','3S'],['4S','4D','6C','7H','8C'])==2?'Passed one pair':'Failed one pair').'<br>');
print((rankHand(['AS','AS'],['3S','3D','8C','9H','2C'])==3?'Passed two pair':'Failed two pair').'<br>');
print((rankHand(['AS','2S'],['3S','3D','AC','9H','2C'])==3?'Passed two pair':'Failed two pair').'<br>');
print((rankHand(['AS','2S'],['2S','3D','AC','9H','4C'])==3?'Passed two pair':'Failed two pair').'<br>');
print((rankHand(['AS','2S'],['3S','3D','9C','9H','2C'])==3?'Passed two pair':'Failed two pair').'<br>');
print((rankHand(['2S','2S'],['2S','5D','6C','7H','8C'])==4?'Passed three of a kind':'Failed three of a kind').'<br>');
print((rankHand(['2S','5S'],['2S','2D','6C','7H','8C'])==4?'Passed three of a kind':'Failed three of a kind').'<br>');
print((rankHand(['2S','3S'],['4S','5D','6C','9H','8C'])==5?'Passed straight':'Failed straight').'<br>');
print((rankHand(['2S','TS'],['4S','5D','6C','7H','8C'])==5?'Passed straight':'Failed straight').'<br>');
/*print((rankHand(['AS],['3S','7D','8C','9H','2C'])==6?'Passed flush':'Failed flush').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==7?'Passed full house':'Failed full house').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==8?'Passed four of a kind':'Failed four of a kind').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==9?'Passed straight flush':'Failed straight flush').'<br>');
print((rankHand(['AS','4S'],['3S','7D','8C','9H','2C'])==10?'Passed royal flush':'Failed royal flush').'<br>');*/
?>
</pre>