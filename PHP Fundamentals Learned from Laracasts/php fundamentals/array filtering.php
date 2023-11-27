<?php


$movies=[
    [
        "name"=>"Toy Story",
        "release"=>1998
    ],
    [
        "name"=>"Lady bug",
        "release"=>2020
    ],
    [
        "name"=>"Troll Hunters",
        "release"=>2018
    ],
    [
        "name"=>"MC Queen",
        "release"=>2011
    ],
    [
        "name"=>"Frozen",
        "release"=>1983
    ],
    [
        "name"=>"The Lion",
        "release"=>2001
    ],
    [
        "name"=>"Fast and Furious",
        "release"=>2022
    ]
];

function filter_movie($items,$func) {
    $filterd_items=[];
    foreach($items as $item) {
        if($func($item)) {
            $filterd_items[] = $item;
        }
    }
    return $filterd_items;
}
$filterd_movies=filter_movie($movies,function($item){
    return $item['release']>=2001;
});

require 'array filtering.view.php';