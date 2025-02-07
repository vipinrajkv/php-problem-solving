

<?php 
/** In this example:
a = [1, 2, 3]
b = [3, 2, 1]
Now, let's compare each individual score:

If a[i] > b[i], then Alice is awarded 1 point.
If a[i] < b[i], then Bob is awarded 1 point.
If a[i] = b[i], then neither person receives a point.

Alice's comparison score is 1, and Bob's comparison score is 1. Thus, we return the array [1,1].

*/


function campareTriplets($array1, $array2, ) {
$aliceScore = 0;
$blobScore = 0;
	foreach ($array1 as $key => $value1 ) {

			if ($array1[$key] == $array2[$key]) {
				continue;
			}

			if ($array1[$key] > $array2[$key]) {
				$aliceScore ++;

				continue;
			}
				$blobScore ++;
	}

	return [$aliceScore, $blobScore];
}
$array1 = [30,28,46]; // Alice
$array2 = [15,21,56]; // Blob

$check =  campareTriplets($array1, $array2);
var_dump($check ) ;






function compareTripletsArray($a, $b) {
    $length = count($a);
    $aliceScore = 0;
    $bobScore = 0;
    for($i=0; $i<$length; $i++){
        if($a[$i] == $b[$i]){
            continue;
        }
        if($a[$i] > $b[$i]){
            $aliceScore++;
            continue;
        }
        $bobScore++;
    }
    return [$aliceScore, $bobScore];
}
$a = [1, 2, 3];
$b = [3, 2, 1];
var_dump (compareTripletsArray($a,$b)); 
?>