<?php


$conn=mysqli_connect('localhost','root','','ajax');
$search=$_POST['city1'];
$query="SELECT * FROM students WHERE city LIKE '%{$search}%'";

$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)> 0){
$output="<table border='0' width='100%' cellpadding='10px'>
<tr>
<th width='60px'>ID</th>
<th>NAME</th>
<th width='90px'>CITY</th>
<th width='90px'>AGE</th>
</tr>";
    while( $row=mysqli_fetch_array($result)){
        $output.="<tr><td>".$row['id']."</td><td>".$row['student_name']."</td><td>".$row['city']."</td><td>".$row['age']."</td></tr>";
    }
$output.="</table>";
echo $output;
}else{
    echo "<h2>No Result Found</h2>";
}

?>