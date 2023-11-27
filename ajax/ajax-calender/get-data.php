<?php

$conn=mysqli_connect("localhost","root","","ajax");
if(isset($_POST["minDate"]) && isset($_POST["maxDate"])){

    $min=$_POST["minDate"];
    $max=$_POST["maxDate"];
    $sql = "SELECT * FROM students
    WHERE STR_TO_DATE(dob, '%m/%d/%Y') BETWEEN STR_TO_DATE('{$min}', '%m/%d/%Y') AND STR_TO_DATE('{$max}', '%m/%d/%Y')";
}else{
    $sql= "SELECT * FROM students";
}
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)> 0){
    $output="<table>";
    while( $row=mysqli_fetch_array($result)){
        $output.="<tr><td>".$row['id']."</td><td>".$row['student_name']."</td><td>".$row['city']."</td><td>".$row['dob']."</td></tr>";
    }
    $output.= "</table>";
    echo $output;
}else{
    echo "<h2>No Records Found!</h2>";
}
?>
