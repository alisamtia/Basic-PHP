<?php

// $fruit1=['orange','banana','apple','grapes'];
// $fruit2=["Apple","lemon","guava"];
//
// $newarray=array_merge($fruit1,$fruit2);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";





// Merge Complex array
// $fruit1=['a'=>'orange','b'=>'banana','c'=>'apple','d'=>'grapes'];
// $fruit2=['b'=>['colors'=>['red','blue','green']],
// 'e'=>"lemon",
// 55,
// 68];
//
// $newarray=array_merge($fruit1,$fruit2);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";


// merge array with key
$fruit1=['Ali Samtia','Noman','Ahmed'];
$fruit2=[12,13,16];

$newarray=array_combine($fruit1,$fruit2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

 ?>
