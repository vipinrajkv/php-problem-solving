<?php
function findSmallestNumber($arr) {
	$smallest = $arr[0];
    
    for ($i=0; $i < count($arr); $i++) {
    	if($arr[$i] < $smallest) {
        	$smallest = $arr[$i];
        }
    }
    
    return $smallest;
}

$checkArray = [34,25,15,3,10,2];
echo findSmallestNumber($checkArray);
?>