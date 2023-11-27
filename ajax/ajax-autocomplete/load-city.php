<?php

$conn=mysqli_connect("localhost","root","","ajax");
$city=$_POST['city'];
$query="SELECT DISTINCT(city) from students where city LIKE '%{$city}%'";

$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)> 0){
	$output="<ul>";
	while($row=mysqli_fetch_array($result)){
		$output.= "<li>".$row['city']."</li>";
	}
	$output.= "</ul>";
}
else{
	$output= "No results found!";
}
echo $output;
?>
