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
?>