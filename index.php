<?php
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";
$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $raw_response = file_get_contents($URL);
    $response = json_decode($raw_response, true);
    $data = $response['results'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>333 Assignment 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
    <div class="max-h-[400px] overflow-y-auto -webkit-overflow-scrolling-touch mt-5 border border-gray-200 rounded-md px-5">
        <table class="w-full border-separate border-spacing-0">
            <thead class="sticky top-0 z-10">
                <tr>
                    <th class="p-3 text-left bg-gray-100 font-bold text-gray-700 border-b border-gray-200">Year</th>
                    <th class="p-3 text-left bg-gray-100 font-bold text-gray-700 border-b border-gray-200">Semester</th>
                    <th class="p-3 text-left bg-gray-100 font-bold text-gray-700 border-b border-gray-200">The Programs</th>
                    <th class="p-3 text-left bg-gray-100 font-bold text-gray-700 border-b border-gray-200">Nationality</th>
                    <th class="p-3 text-left bg-gray-100 font-bold text-gray-700 border-b border-gray-200">Colleges</th>
                    <th class="p-3 text-left bg-gray-100 font-bold text-gray-700 border-b border-gray-200">No. Of Students</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr class="even:bg-gray-50 hover:bg-gray-100">
                        <td class="p-3 border-b border-gray-200" data-label="Year"><?php echo $item['year']; ?></td>
                        <td class="p-3 border-b border-gray-200" data-label="Semester"><?php echo $item['semester']; ?></td>
                        <td class="p-3 border-b border-gray-200" data-label="The Programs"><?php echo $item['the_programs']; ?></td>
                        <td class="p-3 border-b border-gray-200" data-label="Nationality"><?php echo $item['nationality']; ?></td>
                        <td class="p-3 border-b border-gray-200" data-label="Colleges"><?php echo $item['colleges']; ?></td>
                        <td class="p-3 border-b border-gray-200" data-label="No. Of Students"><?php echo $item['number_of_students']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>