<?php
$csvFile = 'Excel/Promedio1_dia.csv';
$csvData = file_get_contents($csvFile);
$rows = str_getcsv($csvData, "\n");
$data = array();

foreach ($rows as $row) {
    $data[] = str_getcsv($row, ",");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        #container {
            height: 400px;
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        #datatable {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        #datatable caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        #datatable th {
            font-weight: 600;
            padding: 0.5em;
        }

        #datatable td,
        #datatable th,
        #datatable caption {
            padding: 0.5em;
        }

        #datatable thead tr,
        #datatable tr:nth-child(even) {
            background: #f8f8f8;
        }

        #datatable tr:hover {
            background: #f1f7ff;
        }
    </style>

</head>

<body>

    <script src="code/highcharts.js"></script>
    <script src="code/modules/data.js"></script>
    <script src="code/modules/exporting.js"></script>
    <script src="code/modules/export-data.js"></script>
    <script src="code/modules/accessibility.js"></script>
    
    

</body>