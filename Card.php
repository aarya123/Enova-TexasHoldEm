<?php
class Card{
    public $value;
    public $suit;
    public function __construct($param) {
        $temp=str_split($param);
        $this->value=$temp[0];
        $this->suit=$temp[1];
    }

    public function getValue(){
        switch($this->value){
            case '2':
                return 2;
            case '3':
                return 3;
            case '4':
                return 4;
            case '5':
                return 5;
            case '6':
                return 6;
            case '7':
                return 7;
            case '8':
                return 8;
            case '9':
                return 9;
            case 'T':
                return 10;
            case 'J':
                return 11;
            case 'Q':
                return 12;
            case 'K':
                return 13;
            case 'A':
                return 14;
            default:
                return 0;
        }
    }
}
?>