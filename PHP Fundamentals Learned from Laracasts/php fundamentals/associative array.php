<?php
$assoc_array=[
    [
        "name"=>"A Tale of Two Cities",
        "release"=>1859,
        "purchase_url"=>"https://en.wikipedia.org/wiki/A_Tale_of_Two_Cities",
        "author"=>"Charles Dickens"
    ],
    [
        "name"=>"The Little Prince",
        "release"=>1943,
        "purchase_url"=>"https://en.wikipedia.org/wiki/The_Little_Prince",
        "author"=>"Antoine de Saint-Exupéry"
    ],
    [
        "name"=>"The Lord of the Rings",
        "release"=>1955,
        "purchase_url"=>"https://en.wikipedia.org/wiki/The_Lord_of_the_Rings",
        "author"=>"J. R. R. Tolkien"
    ]
    ];
echo "<ul>";
foreach( $assoc_array as $book) {
echo "<li>";
echo $book['name'];
echo " - ".$book['release'];
echo "<li>";
};
?>
</ul>