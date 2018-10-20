<?php

//header('Content-Type: text/plain'); 

$url='https://www.pinterest.com/amp/kwakman99/mechanical-drawings-blueprints-cad-drawings/' ;

$raw = file_get_contents($url) ;

//Echo $raw;

$re = '/https\:\/\/i\.pinimg\.com(.*?)\.jpg/';

preg_match_all($re, $raw, $matches);

$slicedArray = array_slice($matches[0], 0, 50);

//Print_r($slicedArray) ;

//Print_r($matches[1]);

//Echo "<br>bola kush ni" ;

//$input=implode("PHP_EOL", $slicedArray);

$input=implode("<br>", $slicedArray);

$input= str_replace(['236x', 'jpg'], ['originals','png'] , $input);

Echo $input;

?>
