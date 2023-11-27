<?php

$colors=[
  "red",
  "blue",
  "green"
];

foreach ($colors as $values) {
  echo "$values<br>";
}

$age=[
  "elon"=>23,
  "steve"=>26,
  "bill"=>52,
];


echo "<ul>";
foreach ($age as $key => $value) {
  echo "<li>$key = $value<br></li>";
}
echo "</ul>";
 ?>
