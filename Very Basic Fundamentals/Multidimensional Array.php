<?php

$emp=[
[1,"Ahmed","Manager",50000],
[2,"Noman","Driver",20000],
[3,"Ali","Computer Operator",80000],
[4,"Mohsin","Salesman",30000],
];

echo "<table border='2px' cellpading='5px' cellspacing='0'>";
echo "<tr>
<th>Emp ID.</th>
<th>Emp Name.</th>
<th>Designation</th>
<th>Sallary</th>
</tr>";
foreach($emp as $v1) {
echo "<tr>";
  foreach($v1 as $v2){
    echo "<td>$v2</td>";
  }
  echo "</te>";
}
echo "</table>";

// echo "<pre>";
// var_dump($emp);
// echo "</pre>";

// for($row=0;$row<=3;$row++){
//   for($col=0;$col<=3;$col++){
//     echo $emp[$row][$col]."  ";
//   }
//   echo "<br>";
// }

#Another way to do it



 ?>
