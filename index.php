<?php
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";
$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $raw_response = file_get_contents($URL);
    $response = json_decode($raw_response, true); // decode into an associative array
    $data = $response['results'];
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
    <table>
        <thead>
            <th>Year</th>
            <th>Semester</th>
            <th>The Programs</th>
            <th>Nationality</th>
            <th>Colleges</th>
            <th>No. Of Students</th>
        </thead>
        <tbody>
            <?php foreach ($data as $item) {
                $year = $item['year'];
                $semester = $item['semester'];
                $the_programs = $item['the_programs'];
                $nationality = $item['nationality'];
                $colleges = $item['colleges'];
                $number_of_students = $item['number_of_students'];

                echo "<tr>";
                echo "<td>$year</td>";
                echo "<td>$semester</td>";
                echo "<td>$the_programs</td>";
                echo "<td>$nationality</td>";
                echo "<td>$colleges</td>";
                echo "<td>$number_of_students</td>";
                echo "</tr>";
            } ?>
        </tbody>
    </table>
</body>

</html>