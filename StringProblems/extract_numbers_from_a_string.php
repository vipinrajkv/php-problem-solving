<?php
/**
 * How to extract Numbers From a String in PHP
 */

 function extractNumbers($string){
    $pattern = '/\d+(\.\d+)?/';
    preg_match_all($pattern, $string, $matches);
    $numbersInString = implode(',', $matches[0]);

    return $numbersInString;
 }
    $string = 'hello,i am 123! here 23';
    echo  extractNumbers($string);
?>