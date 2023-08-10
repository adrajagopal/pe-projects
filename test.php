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