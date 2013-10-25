<?php
include 'Card.php';
/*
0 = Nothing
1 = High Card (Jack or better)
2 = One Pair
3 = Two Pair
4 = Three of a Kind
5 = Straight
6 = Flush
7 = Full House
8 = Four of a Kind
9 = Straight Flush
10 = Royal Flush
*/
function rankHand($hand, $community){
    $handCards=[new Card($hand[0]), new Card($hand[1])];
    $communityCards=array();
    for($i=0;$i<count($community);$i++)
        array_push($communityCards,new Card($community[$i]));
    if(isRoyalFlush($handCards, $communityCards))
        return 10;
    elseif(isStraightFlush($handCards, $communityCards))
        return 9;
    elseif(isFour($handCards, $communityCards))
        return 8;
    elseif(isFullHouse($handCards, $communityCards))
        return 7;
    elseif(isFlush($handCards, $communityCards))
        return 6;
    elseif(isStraight($handCards, $communityCards))
        return 5;
    elseif(isThree($handCards, $communityCards))
        return 4;
    elseif(isTwoPair($handCards, $communityCards))
        return 3;
    elseif(isOnePair($handCards, $communityCards))
        return 2;
    elseif(isHigh($handCards, $communityCards))
        return 1;
    else
        return 0;
}

function isRoyalFlush($hand,$community){
    return false;
}

function isStraightFlush($hand,$community){
    return false;
}

function isFour($hand,$community){
    $cardCatalog=array();
    for($i=0;$i<count($hand);$i++)
        if(isset($cardCatalog[$hand[$i]->getValue()]))
            $cardCatalog[$hand[$i]->getValue()]++;
        else
            $cardCatalog[$hand[$i]->getValue()]=1;
    for($i=0;$i<count($community);$i++)
        if(isset($cardCatalog[$community[$i]->getValue()]))
            $cardCatalog[$community[$i]->getValue()]++;
        else
            $cardCatalog[$community[$i]->getValue()]=1;
    foreach ($cardCatalog as $key => $value) 
        if($value>3)
            return true;
    return false;
}

function isFullHouse($hand,$community){
    return false;
}

function isFlush($hand,$community){
    if (count($hand) + count($community) < 5 ) {
        return false;
    }
    else {
        $all_cards = array_merge ($hand, $community);
        foreach ($all_cards as $c1) {
            $matches = -1;
            foreach ($all_cards as $c2) {
                if ($c1->suit == $c2->suit ){
                    $matches++;
                    if ($matches == 4) {
                        return true;
                    }
                }
            }
            
        }
    }
        return false;
}

function isStraight($hand,$community){
    $cardCatalog=array();
    for($i=0;$i<count($hand);$i++)
        if(!isset($cardCatalog[$hand[$i]->getValue()]))
            $cardCatalog[$hand[$i]->getValue()]=1;
    for($i=0;$i<count($community);$i++)
        if(!isset($cardCatalog[$community[$i]->getValue()]))
            $cardCatalog[$community[$i]->getValue()]=1;
    ksort($cardCatalog);
    $count=0;
    $prev;
    foreach ($cardCatalog as $key => $value) 
        if($count>4)
            return true;
        elseif(!isset($prev))
        {
            $prev=$key;
            $count=1;
        }
        elseif($key==$prev+1)
        {
            $prev=$key;
            $count++;
        }
        else
        {
            $prev=$key;
            $count=1;
        }
    if($count>4)
        return true;
    return false;
}

function isThree($hand,$community){
    $cardCatalog=array();
    for($i=0;$i<count($hand);$i++)
        if(isset($cardCatalog[$hand[$i]->getValue()]))
            $cardCatalog[$hand[$i]->getValue()]++;
        else
            $cardCatalog[$hand[$i]->getValue()]=1;
    for($i=0;$i<count($community);$i++)
        if(isset($cardCatalog[$community[$i]->getValue()]))
            $cardCatalog[$community[$i]->getValue()]++;
        else
            $cardCatalog[$community[$i]->getValue()]=1;
    foreach ($cardCatalog as $key => $value) 
        if($value>2)
            return true;
    return false;
}

function isTwoPair($hand,$community){
    $pairCount=0;
    if($hand[0]->getValue()==$hand[1]->getValue())
        $pairCount++;
    for($i=0;$i<count($community);$i++)
        for($j=$i+1;$j<count($community);$j++)
            if($community[$i]->getValue()==$community[$j]->getValue())
                $pairCount++;
    for($i=0;$i<count($hand);$i++)
        for($j=0;$j<count($community);$j++)
            if($hand[$i]->getValue()==$community[$j]->getValue())
                $pairCount++;
    if($pairCount>1)
        return true;
    return false;
}

function isOnePair($hand,$community){
    if($hand[0]->getValue()==$hand[1]->getValue())
        return true;
    for($i=0;$i<count($community);$i++)
        for($j=$i+1;$j<count($community);$j++)
            if($community[$i]->getValue()==$community[$j]->getValue())
                return true;
    for($i=0;$i<count($hand);$i++)
        for($j=0;$j<count($community);$j++)
            if($hand[$i]->getValue()==$community[$j]->getValue())
                return true;
    return false;
}

function isHigh($hand,$community){
    if($hand[0]->getValue()>10||$hand[1]->getValue()>10)
        return true;
    return false;
}


?>