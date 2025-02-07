/**
 Given an array of n integers, find the third largest element.
  All the elements in the array are distinct integers.
 */<?php 
// PHP program to find the smallest, second smallest, and third smallest elements in an array

function findSmallestSecondSmallestThirdSmallest($arr) 
{
    $arr_size = count($arr);

    // There should be at least three elements
    if ($arr_size < 3) 
    { 
        echo "Invalid Input: Array should have at least three elements.\n"; 
        return; 
    }

    // Initialize smallest, second smallest, and third smallest
    $smallest = PHP_INT_MAX;
    $second_smallest = PHP_INT_MAX;
    $third_smallest = PHP_INT_MAX;

    // Loop through the array to find the smallest, second smallest, and third smallest
    foreach ($arr as $element) {
        if ($element < $smallest) {
            // Update third smallest, second smallest, and smallest
            $third_smallest = $second_smallest;
            $second_smallest = $smallest;
            $smallest = $element;
        } elseif ($element < $second_smallest && $element != $smallest) {
            // Update third smallest and second smallest
            $third_smallest = $second_smallest;
            $second_smallest = $element;
        } elseif ($element < $third_smallest && $element != $second_smallest && $element != $smallest) {
            // Update third smallest
            $third_smallest = $element;
        }
    }

    // Output the smallest, second smallest, and third smallest elements
    echo "The smallest element is " . $smallest . "\n";
    echo "The second smallest element is " . $second_smallest . "\n";
    echo "The third smallest element is " . $third_smallest . "\n"; 
} 
  
// Driver Code
$arr = array(12, 13, 1, 10, 34, 16); 
findSmallestSecondSmallestThirdSmallest($arr); 

// This code is contributed by m_kit
?> 
