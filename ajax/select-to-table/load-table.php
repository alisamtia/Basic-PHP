<?php
$conn=mysqli_connect("localhost","root","","ajax");
$city=$_POST['city'];
$query="SELECT * FROM students WHERE city='{$city}'";
$result=mysqli_query($conn,$query);
$output="";
if(mysqli_num_rows($result)> 0){
  $output .= '<table border="0" width="100%"  cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th width="90px">Age</th>
                <th width="90px">City</th>
              </tr>';
  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
                  <td align='center'>{$row["id"]}</td>
                  <td>{$row["student_name"]}</td>
                  <td align='center'>{$row["age"]}</td>
                  <td align='center'>{$row["city"]}</td>
                </tr>";
  }    
   $output .= "</table>";
   echo $output;
}else{
  echo "<h2>No Records Found!!</h2>";
}

?>
