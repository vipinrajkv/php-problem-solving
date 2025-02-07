<?php
$input_string = "sravan kumar author at geeks for geeks ";
$testString2 = 'for';

function missingLetterSearch(string $input_string, string $testString2) {
    $stringStart = strpos($input_string, $testString2);
    echo $stringStart;
}
missingLetterSearch($input_string, $testString2);
?>