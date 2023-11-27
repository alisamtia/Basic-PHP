<?php

$marks=[
  "Ali"=>[
    "Math"=>47,
    "Science"=>100,
    "Urdu"=>89
  ],

  "Noman"=>[
    "Math"=>79,
    "Science"=>68,
    "Urdu"=>86
  ],

  "Ahmed"=>[
    "Math"=>64,
    "Science"=>67,
    "Urdu"=>47
  ],

];

// echo "<pre>";
// var_dump($marks);
// echo "</pre>";
echo "<table border='2px' cellspacing='0' celpadding='5px'>";
echo "<tr>
<th>Student Name</th>
<th>Math</th>
<th>Science</th>
<th>Urdu</th>
</tr>";
foreach($marks as $key=>$value){
  echo "<tr>";
  echo "<td>$key</td>";
  foreach($value as $qs){
    echo "<td>  $qs  </td>";
  }
  echo "</tr>";
}
echo "</table>";

 ?>
