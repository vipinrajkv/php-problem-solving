<?php
function checkSubstring($string, $searchString) {
    if (strpos($string, $searchString)) {
        return "String found";
    }
    return "String not found";
}
$string = "code with php,  php program!";
$searchString = "php";
echo checkSubstring($string,$searchString);
echo '<br>';

function checkSubstringOnStringCount($string, $searchString) {
   
    if (substr_count($string, $searchString) > 0 ) {
        return "String found";
    }
    return "String not found";
}
echo checkSubstringOnStringCount($string,$searchString);
echo '<br>';
?>