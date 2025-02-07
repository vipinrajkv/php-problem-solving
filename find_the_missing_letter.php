<?php
$testString1 = 'abcdefhijk';
$testString2 = 'opqstuv';

function missingLetterSearch(string $searchString) {
    $alphabeticLetterList = alphabeticLetters();
    $stringStart = strpos($alphabeticLetterList, $searchString[0]);
   
    for($i= 0; $i < (strlen($searchString)); $i++ ) {

        if ( $searchString[$i] !==  $alphabeticLetterList[$i+$stringStart]) {
            return $alphabeticLetterList[$i+$stringStart];
        }
    }
}
 

 function alphabeticLetters() {
    $letters = range('a','z');
    $letterString = '';
    foreach($letters as $key => $val ){
        $letterString .= $val;
    }

    return $letterString;
}

missingLetterSearch($testString2);



function arrayCheck($givenvalue) {
$alphabet = '';

foreach (range('a','z') as $key ) {
	$alphabet .= $key;
    }
    
  $startPosAlphabet = strpos($alphabet, $givenvalue[0]);
 
  for($i= 0; $i< strlen($givenvalue); $i++) {
 	

  		if($alphabet[$startPosAlphabet+ $i ] !== $givenvalue[$i]) {
        
        echo $alphabet[$startPosAlphabet+ $i];
    }
  }
}



arrayCheck('abd');



/**************************************/
?>