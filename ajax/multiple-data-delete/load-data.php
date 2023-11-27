<?php

$conn=mysqli_connect("localhost","root","","ajax") or die("Connection Failed!");

$sql="SELECT * FROM students";
$result=mysqli_query($conn,$sql) or die("Query Failed!");
if(mysqli_num_rows($result)){
  $order="<table border='0' width='100%' cellpadding='10px' cellspacing='2'>
  <tr>
  <th width='30px'></th>
  <th width='30px'>Id</th>
  <th>Name</th>
  <th width='30px'>Age</th>
  <th width='30px'>City</th>
  </tr>";
  while($row=mysqli_fetch_assoc($result)){
$order.="  <tr>
  <td width='30px'><input type='checkbox' value='{$row['id']}'></td>
  <td width='30px'>{$row['id']}</td>
  <td>{$row['student_name']}</td>
  <td width='30px'>{$row['age']}</td>
  <td width='30px'>{$row['city']}</td>
  </tr>";
}
$order.="</table>";
}
echo $order;
?>
