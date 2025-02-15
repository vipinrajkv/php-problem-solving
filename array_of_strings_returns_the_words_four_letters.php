<?php

/**
 * Create a function that takes an array of strings 
 * and returns the words that are exactly four letters.
 * isFourLetters(["Tomato", "Potato", "Pair"]) ➞ ["Pair"]
 * isFourLetters(["Kangaroo", "Bear", "Fox"]) ➞ ["Bear"]
 * isFourLetters(["Ryan", "Kieran", "Jason", "Matt"]) ➞ ["Ryan", "Matt"]
 */

function getFourLetterString($checkArray)
{
    $result = [];

    foreach ($checkArray as $array) {

        if (strlen($array) == 4) {
            $result[] = $array;
            continue;
        }
    }
    return $result;
}
$checkArray = ["Tomato", "tyre", "Potato", "Pair"];
$data = getFourLetterString($checkArray);
print_r($data);

$checkArray2 = ["Tomato", "tyre", "Potato"];
function isFourLetters($checkArray2)
{
    return array_values(preg_filter('/^(\w{4})$/', '$0', $checkArray2));
}
$data2 = isFourLetters($checkArray2);
print_r($data2);
echo "<br>";


$checkArray3 = ["Tomato", "tyre", "fire", "care", "Potato"];
function isFourLettersString($checkArray2)
{
    return array_values(array_filter($checkArray2, function ($array) {
        return (strlen($array) == 4);
    }));
}
$data3 = isFourLettersString($checkArray3);
print_r($data3);
