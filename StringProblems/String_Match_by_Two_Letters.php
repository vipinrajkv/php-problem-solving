<?php
/**
 * 
 *  Create a function that takes two strings, $a and $b. Return the number of times the two strings
 *  contain the same two letters at the same index. The two letters must appear at consecutive indices.
 *  For example, if $a = "bboiizz" and $b = "bbuiiz", your function should return 3, 
 *  since the "bb", "ii", and "iz" appear at the same place in both strings.
 
 *  strMatchBy2char("yytaazz", "yyjaaz") ➞ 3

*   strMatchBy2char("edabit", "ed") ➞ 1

*    strMatchBy2char("", "") ➞ 0
*/

 function strMatchBy2char($stringArray, $findArray) {
    $arrayCount  = strlen($stringArray);
    $stringCount = 0;
    
    for($i=0; $i<($arrayCount -1); $i++) {

        if (substr($stringArray,$i,2) == substr($findArray,$i,2)) {
            $stringCount ++;
        }
    }
    return $stringCount;
 }

 echo (strMatchBy2char("yytaazz", "yyjaaz")) ;

?>