<pre>
<?php

include_once "states.php";
//include_once "RankHand.php";

print_r("Helldfo\n");

while (true) {
	$state = getState();
	if ($state->your_turn) {
	//	$strength = RankHand ($state->hand, $state->community_cards);
		print_r ("\nCards are- ".$state->hand[0]." and ".$state->hand[1]."\n");

//		echo "\n\n Hand RANK: ";
	///	print_r(RankHand(['AS','AD'],['2S','2H','3S']));
		echo "\n\n";

		print_r (act("raise","400"));
	}
	else {
		print_r("\nNot your turn yet\n");
	}
	sleep (1);
}


?>
</pre>