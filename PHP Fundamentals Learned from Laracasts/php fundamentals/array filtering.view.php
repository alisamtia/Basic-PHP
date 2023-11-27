<!DOCTYPE html>
<html>
<head>
<title>Page Filtering</title>
</head>
<body>
<ul>
<?php

echo "<ul>";
foreach($filterd_movies as $movie ) {
    echo "<li>".$movie['name']." - ".$movie['release']."</li>";
}
echo "</ul>";
?>
</ul>
</body>
</html>