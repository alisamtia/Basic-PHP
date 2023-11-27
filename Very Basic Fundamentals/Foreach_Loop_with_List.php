<?php

// $emp=[
// [1,"Ahmed","Manager",50000],
// [2,"Zesshan","Driver",10000],
// [3,"Noman","Salesman",20000],
// [4,"Ali Samtia","Computer Operator",50000],
// ];


// echo "<table>";
// foreach ($emp as list($id,$name,$designation,$sallary)) {
//   echo "<tr><td>$id</td><td>$name</td><td>$designation</td><td>$sallary</td></tr>";
// };
//
// echo "</table>";


$marks=[
  [
    "Name"=>"Ali",
    "id"=>1,
    "Math"=>47,
    "Science"=>100,
    "Urdu"=>89
  ],

  [
    "Name"=>"Noman",
    "id"=>2,
    "Math"=>79,
    "Science"=>68,
    "Urdu"=>86
  ],

  [
    "Name"=>"Ahmed",
    "id"=>3,
    "Math"=>64,
    "Science"=>67,
    "Urdu"=>47
  ],

];


echo "<table>";
foreach ($marks as list("Name"=>$name,"id"=>$id,"Math"=>$math,"Science"=>$science,"Urdu"=>$urdu)) {
  echo "<tr><td>$id</td><td>$name</td><td>$math</td><td>$science</td><td>$urdu</td></tr>";
};

echo "</table>";
 ?>
