<?php

include("functions.php");

//pull in the JSON file
$json = file_get_contents('data/test.json');

//convert to PHP array
$decodedJson = json_decode($json, true);

//define new record
$newDog = ["name" => "chubs", "breed" => "boglen-terrier"];

//add record to PHP array
array_push($decodedJson, $newDog);

//encode array as JSON
$updatedJson = json_encode($decodedJson, true);

//put the array into the original JSON file
file_put_contents('data/test.json', $updatedJson);

display($decodedJson);

?>

<!-- The only thing that felt like a little friction was in line 18, the name for the $decodedJson / because after that first decode - it kind takes on a new life as “the data” or “the books” etc. -->