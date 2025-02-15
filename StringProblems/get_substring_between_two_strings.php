<?php 
/**
 * How to get a substring between two strings in PHP?
 */

function getSubStringBetweenStrings($string, $start, $end) {
    $startString = strpos($string, $start);
    $startString += strlen($start);
    $endString = strpos($string, $end);
    $size = ($endString- $startString);

    $missedString = substr($string,$startString, $size);
    return $missedString;
    
}

$string = "Hello, World Hi, Welcome to Php";
echo getSubStringBetweenStrings($string,'World','Php');
?>

