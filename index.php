<?php
include_once __DIR__ . "/Models/Movie.php";
include_once __DIR__ . "/db.php";

$movieOne = new Movie(
    $detailsOne["title"], 
    $detailsOne["genres"], 
    $detailsOne["pubblicationDate"], 
    $detailsOne["vote"], 
    $detailsOne["duration"], 
    $detailsOne["description"]
);
$movieTwo = new Movie(
    $detailsTwo["title"], 
    $detailsTwo["genres"], 
    $detailsTwo["pubblicationDate"], 
    $detailsTwo["vote"],
);

var_dump($movieOne);
var_dump($movieTwo);
?>