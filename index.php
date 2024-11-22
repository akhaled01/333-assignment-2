<?php
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";
$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $response = file_get_contents($URL);
    $data = json_decode($response, true); // decode into an associative array
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>333 Assignment 2</title>
</head>

<body>
    
</body>

</html>