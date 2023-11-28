
<?php
include('functions.php');
$csvFile = 'Excel/Registro.csv';
$csvData = file_get_contents($csvFile);
$rows = str_getcsv($csvData, "\n");
$data = array();
foreach ($rows as $row) {
    $data[] = str_getcsv($row, ",");
}
$valoresColumna6 = array();
$valoresColumna7 = array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>

    <script src="code/highcharts.js"></script>
    <script src="code/modules/data.js"></script>
    <script src="code/modules/exporting.js"></script>
    <script src="code/modules/export-data.js"></script>
    <script src="code/modules/accessibility.js"></script>
    <?php
    for ($i = 0; $i < count($data); $i++) {
        for ($j = 0; $j < count($data[0]); $j++) {
            if ($j == 5) {
                if ($i >= 0 && $i <= 16) {
                    $valoresColumna6['D1'][] = intval($data[$i][$j]);
                } elseif ($i >= 17 && $i <= 30) {
                    $valoresColumna6['D2'][] = intval($data[$i][$j]);
                } elseif ($i >= 31 && $i <= 47) {
                    $valoresColumna6['D3'][] = intval($data[$i][$j]);
                } elseif ($i >= 48 && $i <= 63) {
                    $valoresColumna6['D4'][] = intval($data[$i][$j]);
                } elseif ($i >= 64 && $i <= 79) {
                    $valoresColumna6['D5'][] = intval($data[$i][$j]);
                } elseif ($i >= 80 && $i <= 97) {
                    $valoresColumna6['D6'][] = intval($data[$i][$j]);
                }
            }
            if ($j == 6) {
                if ($i >= 0 && $i <= 16) {
                    $valoresColumna7['D1'][] = intval($data[$i][$j]);
                } elseif ($i >= 17 && $i <= 30) {
                    $valoresColumna7['D2'][] = intval($data[$i][$j]);
                } elseif ($i >= 31 && $i <= 47) {
                    $valoresColumna7['D3'][] = intval($data[$i][$j]);
                } elseif ($i >= 48 && $i <= 63) {
                    $valoresColumna7['D4'][] = intval($data[$i][$j]);
                } elseif ($i >= 64 && $i <= 79) {
                    $valoresColumna7['D5'][] = intval($data[$i][$j]);
                } elseif ($i >= 80 && $i <= 97) {
                    $valoresColumna7['D6'][] = intval($data[$i][$j]);
                }
            }
        }
    }
    //Calcular la media, mediana y moda de la columna 6 (índice 5)
    $mediaColumna6 = calcularMedia($valoresColumna6);
    $medianaColumna6 = calcularMediana($valoresColumna6);
    $modaColumna6 = calcularModa($valoresColumna6);

    // Calcular la media, mediana y moda de la columna 7
    $mediaColumna7 = calcularMedia($valoresColumna7);
    $medianaColumna7 = calcularMediana($valoresColumna7);
    $modaColumna7 = calcularModa($valoresColumna7);
    ?>

</body>