<?php
/**
 * Create a function which takes in a word and spells it out,
 *  by consecutively adding letters until the full word is completed.
 * spelling("bee") ➞ ["b", "be", "bee"]
 */
//spelling("bee") ➞ ["b", "be", "bee"]
function spelling($str) {
	$newArr = [];
	$splitedString = str_split($str);
	$a = '';
	for($i = 0; $i<count($splitedString); $i++ ) {
    	var_dump($splitedString[$i]);
		$a = $a . $splitedString[$i];
        $newArr[] = $a;
	}
	print_r($newArr);
}
spelling("bee");


//or
function spellChangr($str) {
	for ($i = 1; $i <= strlen($str); $i++) {
		$result[] = substr($str, 0, $i);
	}
	return $result;
}

?>