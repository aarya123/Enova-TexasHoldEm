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
    return false;
}

function isFullHouse($hand,$community){
    return false;
}

function isFlush($hand,$community){
    return false;
}

function isStraight($hand,$community){
    return false;
}

function isThree($hand,$community){
    return false;
}

function isTwoPair($hand,$community){
    return false;
}

function isOnePair($hand,$community){
    if($hand[0]->getValue()==$hand[1]->getValue())
        return true;
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<count($community);$j++)
        {
            if($hand[$i]->getValue()==$community[$j]->getValue())
                return true;
        }
    }
    return false;
}

function isHigh($hand,$community){
    if($hand[0]->getValue()>10||$hand[1]->getValue()>10)
        return true;
    return false;
}


?>