<?php
/***
 * 1. array_search()
 * 2. array_flip()
 * 3. custom function
 * 4. foreach Loop
 * 5. array_keys
 */

    /**
     * array_search() 
     * search an array for a value and returns the key.
     * If the value is found in the array more than once, 
     *  the first matching key is returned
     */
    $array = array('php', 'java', 'css/html', 'python', 'c/c++');
    echo array_search('java',$array);
    echo "\n";

    /**
     *  array_flip()
     *  flips/exchanges all keys with their associated or 
     *  swaps keys and values in an array.
     */
    $flipedArray = array_flip($array);
    $searchWord = 'java';

    function getIndexOnArrayFlip($flipedArray,$searchWord) {
        return  isset($flipedArray[$searchWord]) ? $flipedArray[$searchWord] : null;
    }
    echo  getIndexOnArrayFlip($flipedArray,$searchWord);

    /**
     *  custom function
     */
    function findIndex($array, $element) {
        foreach ($array as $index => $value) {
            if ($value === $element) {
                return $index;
            }
        }
        return -1; // Return -1 if the element is not found
    }
    
    //  indexed array
    $indexedArray = array('apple', 'banana', 'cherry', 'date');
    $index = findIndex($indexedArray, 'cherry');
    echo " The index of 'cherry' is: " . $index;
    echo "\n";// Output: The index of 'cherry' is: 2
    
    //  associative array
    $assocArray = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date');
    $index = findIndex($assocArray, 'cherry');
    echo "The index of 'cherry' is: " . $index; // Output: The index of 'cherry' is: c

    /**
     *  foreach
     */

    $array = array("apple", "banana", "cherry");
    $value = "banana";
    $index = null;

    foreach ($array as $key => $val) {
        if ($val === $value) {
            $index = $key;
            break;
        }
    }

    if ($index !== null) {
        echo "The index of '$value' is $index.\n";
    } else {
        echo "'$value' is not found in the array.\n";
    }

    /**
     *  array_keys
     */

    $array = ['apple', 'banana', 'cherry', 'banana'];
    $elementToFind = 'banana';

    // Find all keys that match the value
    $keys = array_keys($array, $elementToFind);

    if (!empty($keys)) {
        echo "The element '$elementToFind' is found at indices: " . implode(', ', $keys);
    } else {
        echo "The element '$elementToFind' was not found in the array.";
    }
?>