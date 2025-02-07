<?php
$array = [1, 2, 2, 3, 4, 4, 5];
$result = [];

foreach ($array as $key => $value) {
  if (!in_array($value, $result)) {
    $result[$key] = $value;
  }
}

print_r($result);

/*****/
$array = [1, 2, 2, 3, 4, 4, 5];
$result = array_values(array_unique($array));

print_r($result);
?>