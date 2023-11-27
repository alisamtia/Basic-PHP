<?php

/* -------Affected Rows-------*/
$conn = mysqli_connect("localhost","root","","alitest") or die("Connection Failed");

$sql = "SELECT * FROM student";

$sql = "SELECT * FROM student WHERE last_name = 'Ali'";

$sql = "UPDATE student SET last_name = 'Malik' WHERE last_name = 'Rana'";

$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total rows: " . mysqli_affected_rows($conn);









 ?>
