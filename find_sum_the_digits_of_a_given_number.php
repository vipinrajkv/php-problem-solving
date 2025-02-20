<?php
/**
 * How to find Sum the Digits of a given Number 
 */

 function sumOfNumbers($number) : int {
    $number =  (string)$number;
    $sum = 0;

    for ($i=0; $i < strlen($number) ; $i++){
        $sum += $number[$i];
    }
    return $sum;
 }
 $number = 9852544;
 echo sumOfNumbers($number);
?>