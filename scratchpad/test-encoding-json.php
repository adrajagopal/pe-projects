<?php

include("functions.php");

//pull in the JSON file
$json = file_get_contents('data/test.json');

//convert to PHP array
$dogData = json_decode($json, true);

//define new record
$newDog = ["name" => "chubs", "breed" => "boglen-terrier"];

//add record to PHP array
array_push($dogData, $newDog);

//encode array as JSON
$json = json_encode($dogData, true);

//put the array into the original JSON file
$tryIt = file_put_contents('data/test.json', $json);

var_dump($tryIt);

?>

<!-- The only thing that felt like a little friction was in line 18, the name for the $decodedJson / because after that first decode - it kind takes on a new life as “the data” or “the books” etc. -->