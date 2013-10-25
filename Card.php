<?php
class Card{
    public $value;
    public $suit;
    public function __construct($param) {
        $temp=str_split($param);
        $value=$temp[0];
        $suit=$temp[1];
    }

    public function getValue(){
        if($value=='2')
            return 2;
        elseif($value=='3')
            return 3;
        elseif($value=='4')
            return 4;
        elseif($value=='5')
            return 5;
        elseif($value=='6')
            return 6;
        elseif($value=='7')
            return 7;
        elseif($value=='8')
            return 8;
        elseif($value=='9')
            return 9;
        elseif($value=='T')
            return 10;
        elseif($value=='J')
            return 11;
        elseif($value=='Q')
            return 12;
        elseif($value=='K')
            return 13;
        elseif($value=='A')
            return 14;
        else
            return 0;
    }
}
?>