<?php
function checkStringExist($string, $checkString) {
	$arrayString = str_split($string);
    $arrayCheckString = str_split($checkString);
    $newString = '';

    foreach($arrayCheckString as $array) {
        
    	if(in_array($arrayString, $array)) {
        	$newString.= $array; 
        }
        return $newString;
    }
}
echo checkStringExist("trances", "nectar");


// function letterCheck($arr) {
// 	return !array_diff(str_split(strtolower($arr[1])), str_split(strtolower($arr[0])));
// }
?>