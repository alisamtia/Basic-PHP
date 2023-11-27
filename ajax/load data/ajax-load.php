<?php

$conn=mysqli_connect("localhost","root","","alitest") or die("Connection failed");


$sql="select * from student";
$result=mysqli_query($conn,$sql) or die("SQL Query Failed");
$output="";
if(mysqli_num_rows($result)>0){
  $output.=' <table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr style="background:lightblue;">
      <th>ID</th>
      <th>Name</th>
    </tr>';
 while($row=mysqli_fetch_assoc($result)){
  $output.='

     <tr>
       <td>'.$row['id'].'.</td>
       <td>'.$row['first_name']." ".$row['last_name'].'</td>';}
mysqli_close($conn);
echo $output;
}else {
  echo "<h2>No Record Found!</h2>";
}
 ?>


</tr>
 </table>
