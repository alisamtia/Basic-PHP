<?php

$conn=mysqli_connect("localhost","root","","ajax") or die("Connection failed");

if(isset($_POST['range1']) && isset($_POST['range2'])){
  $min=$_POST['range1'];
  $max=$_POST['range2'];

  $query="SELECT * FROM students WHERE age BETWEEN {$min} AND {$max}";
  $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
  if(mysqli_num_rows($result)> 0){
    $output="<table border='0' width='100%'>";
    while( $row=mysqli_fetch_assoc($result)){
      $output.="<tr><td>".$row['id']."</td><td>".$row['student_name']."</td><td>".$row['age']."</td><td>".$row['city']."</td></tr>";
    }
    $output.="</table>";
    echo $output;
  }else{
    echo "<tr><td colspan='4'><h2>No Results Found!!</h2></td></tr>";
  }

}else{
  echo "<h2>Please enter valid Range!!</h2>";
}

?>
