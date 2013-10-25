<pre>
<?php

include_once "states.php";
include_once "RankHand.php";

print_r("Helldfo\n");

//while (true) {
	$state = getState();
	if ($state->your_turn) {
		$strength = RankHand ($state->hand, $state->community_cards);
	//	print_r ("\nCards are- ".$state->hand." and ".$state->community_cards."\n");

		echo "\n\n Hand RANK: ";
		print_r( $strength );
		echo "\n\n";

		switch ($state->betting_phase) {
			case 'deal': 	
				print_r (act("call"));
				break;
			case 'flop':
				if ($strength >= 4)
					print_r (act("raise", "".($state->stack/2)));	
				else
					print_r (act("call"));
				break;
			case 'turn':
				if ($strength > 5)
					print_r (act("raise", "".$state->stack));	
				elseif ($strength == 4)
					print_r (act("raise", "".($state->stack/2)));	
				elseif ($strength >= 2)
					print_r (act("call"));
				elseif ($strength < 2)
					print_r (act("fold"));
				break;
			case 'river':
				if ($strength > 5)
					print_r (act("raise", "".$state->stack));	
				elseif ($strength == 4)
					print_r (act("raise", "".($state->stack/2)));	
				elseif ($strength >= 3)
					print_r (act("call"));
				elseif ($strength < 3)
					print_r (act("fold"));
				break;
			default:
				print_r (act("call"));
				break;
		}
		
	}
	else {
		print_r("\nNot your turn yet\n");
	}
//}


?>
</pre>