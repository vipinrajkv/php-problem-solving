<?php
/**
 * We are given two strings s1 and s2. We need to find the number of occurrences of s2 in s1. 
 * Examples:
 * Input : $s1 = "geeksforgeeks", $s2 = "geeks"
 *  Output : 2
 * Explanation : s2 appears 2 times in s1
 */
$originalString = "geeksforgeeksgeeksfor";
$searchString = "geeks";

echo substr_count($originalString, $searchString);

?>