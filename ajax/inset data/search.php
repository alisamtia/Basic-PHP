<?php

$conn=mysqli_connect("localhost","root","","alitest");
$search=$_POST['search'];
$query="select * from student where first_name LIKE '%{$search}%' OR last_name LIKE '%{$search}%'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
  $sq="";
  $sq.='<table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr style="background:lightblue;">
      <th>ID</th>
      <th>Name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>';
  while($row=mysqli_fetch_assoc($result)){
    $sq.='<tr><td>'.$row['id'].'</td>
    <td>'.$row['first_name']." ".$row['last_name'].'</td>
    <td><button class="edit-button" data-id="'.$row['id'].'">Edit</button></td>
    <td><button class="delete-button" data-id="'.$row['id'].'">Delete</button></td>
    </td></tr>';

  }
$sq.="</table>";
echo $sq;
}
else{
  echo "<h2>No Record Found!!</h2>";
}

 ?>
