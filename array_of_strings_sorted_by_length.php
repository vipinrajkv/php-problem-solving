/** Problem No 5 - date-04-02-2025

Create a function that returns an array of strings sorted by length in ascending order.

sortByLength(["a", "ccc", "dddd", "bb"]) ➞ ["a", "bb", "ccc", "dddd"]

sortByLength(["apple", "pie", "shortcake"]) ➞ ["pie", "apple", "shortcake"]

sortByLength(["may", "april", "september", "august"]) ➞ ["may", "april", "august", "september"]

sortByLength([]) ➞ []
**/
<?php
$a = ["a", "ccc", "dddd", "bb"];
usort($a,"my_sort");
function sortArray($a,$b) {

    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;

}
foreach($a as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";
}

?>