<?php

$conn=mysqli_connect("localhost","root","","alitest") or die("Can't connect");
$limit=5;
if(isset($_POST['page'])){
  $page=$_POST['page'];
}
else{
  $page=0;
}

$query="Select * from student limit {$page},{$limit}";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
$output="<tbody>";
  while($row=mysqli_fetch_assoc($result)){
    $last_id=$row['id'];
    $output .="<tr><td align='center'>".$row['id']."</td><td>".$row['first_name']." ".$row['last_name']."</td></tr>";
  }
  $output .= "</tbody>
            <tbody id='pagination'>
              <tr>
                <td colspan='2'>
                  <button id='ajaxbtn' data-id='".$last_id."'>Load More</button>
                </td>
              </tr>
            </tbody>";
    echo $output;
}else{
  echo "";
}

mysqli_close($conn);


 ?>
