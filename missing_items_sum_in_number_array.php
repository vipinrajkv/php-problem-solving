/**Problem No 4 - date-02-02-2025 
 Create a function that returns the sum of missing numbers from the given array.

 sumMissingNumbers([4, 3, 8, 1, 2]) ➞ 18
    // 5 + 6 + 7 = 18

 sumMissingNumbers([17, 16, 15, 10, 11, 12]) ➞ 27
    // 13 + 14 = 27
*/ 



<?php
function sumMissingNumbers($arr) {
	$minArray = min($arr);
	$maxArray = max($arr);
	$missingNumbersSum = 0;
	for($i=$minArray; $i <= $maxArray; $i++) {
    
    	if (!in_array($i, $arr) ){
           $missingNumbersSum += $i;
        }
    }

    if ($missingNumbersSum > 0){
    	return $missingNumbersSum;
    }

   return $missingNumbersSum = 'No  Missing Numbers (i.e. all numbers in ['.    $minArray.','. $maxArray . '] are present in the list';

}
echo sumMissingNumbers([17, 16, 15, 10, 11, 12]);
?>