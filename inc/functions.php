<?php
     //PHP functions
    function output($value){
	echo("<pre>");
	print_r($value);
	echo("</pre>");
    };

    // PHP scope
    $result = "Amazing PHP!";

    function send(){
        global $result;
        echo $result;
    }


    // array method - array_map(callback, array);
    function cube($n){
        return ($n*$n*$n);
    }

    $a = [1, 2,3, 4, 5, 6, 7, 8];
    $b = array_map("cube", $a);
    print_r($b);

?>