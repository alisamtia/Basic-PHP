<?php
$str="Yahoo baba";
$total_char=strlen($str);
$total_words=str_word_count($str);
$str="Hello world . The nice world";
$search_in_str=substr_count($str,"world");
echo $search_in_str;
 ?>
