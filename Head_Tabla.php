<?php
$csvFile = 'Excel/Registro.csv';
$csvData = file_get_contents($csvFile);
$rows = str_getcsv($csvData, "\n");
$data = array();

foreach ($rows as $row) {
    $data[] = str_getcsv($row, ",");
}
// Inicializar arrays para sumas y contadores
$sumas = array(
    'D1' => 0,
    'D1M' => 0,
    'D2' => 0,
    'D2M' => 0,
    'D3' => 0,
    'D3M' => 0,
    'D4' => 0,
    'D4M' => 0,
    'D5' => 0,
    'D5M' => 0,
    'D6' => 0,
    'D6M' => 0,
);
$sumas6 = array(
    'D16' => 0,
    'D16M' => 0,
    'D26' => 0,
    'D26M' => 0,
    'D36' => 0,
    'D36M' => 0,
    'D46' => 0,
    'D46M' => 0,
    'D56' => 0,
    'D56M' => 0,
    'D66' => 0,
    'D66M' => 0,
);
$k = 0;

$contadores = array(
    'D1' => 0,
    'D1M' => 0,
    'D2' => 0,
    'D2M' => 0,
    'D3' => 0,
    'D3M' => 0,
    'D4' => 0,
    'D4M' => 0,
    'D5' => 0,
    'D5M' => 0,
    'D6' => 0,
    'D6M' => 0,
);
$contadores6 = array(
    'D16' => 0,
    'D16M' => 0,
    'D26' => 0,
    'D26M' => 0,
    'D36' => 0,
    'D36M' => 0,
    'D46' => 0,
    'D46M' => 0,
    'D56' => 0,
    'D56M' => 0,
    'D66' => 0,
    'D66M' => 0,
);

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
    <!-- Sumar los datos del arreglo -->
    <?php
    // Iterar sobre los datos
    for ($i = 0; $i < count($data); $i++) {
        for ($j = 0; $j < count($data[0]); $j++) {
            // Verificar la categoría y actualizar sumas y contadores
            if ($j == 5) {
                if ($i >= 0 && $i <= 11) {
                    $sumas['D1'] += intval($data[$i][$j]);
                    $contadores['D1']++;
                } elseif ($i >= 12 && $i <= 16) {
                    $sumas['D1M'] += intval($data[$i][$j]);
                    $contadores['D1M']++;
                } elseif ($i >= 17 && $i <= 27) {
                    $sumas['D2'] += intval($data[$i][$j]);
                    $contadores['D2']++;
                } elseif ($i >= 28 && $i <= 30) {
                    $sumas['D2M'] += intval($data[$i][$j]);
                    $contadores['D2M']++;
                } elseif ($i >= 31 && $i <= 42) {
                    $sumas['D3'] += intval($data[$i][$j]);
                    $contadores['D3']++;
                } elseif ($i >= 43 && $i <= 47) {
                    $sumas['D3M'] += intval($data[$i][$j]);
                    $contadores['D3M']++;
                } elseif ($i >= 48 && $i <= 58) {
                    $sumas['D4'] += intval($data[$i][$j]);
                    $contadores['D4']++;
                } elseif ($i >= 59 && $i <= 63) {
                    $sumas['D4M'] += intval($data[$i][$j]);
                    $contadores['D4M']++;
                } elseif ($i >= 64 && $i <= 74) {
                    $sumas['D5'] += intval($data[$i][$j]);
                    $contadores['D5']++;
                } elseif ($i >= 75 && $i <= 79) {
                    $sumas['D5M'] += intval($data[$i][$j]);
                    $contadores['D5M']++;
                } elseif ($i >= 80 && $i <= 91) {
                    $sumas['D6'] += intval($data[$i][$j]);
                    $contadores['D6']++;
                } elseif ($i >= 93 && $i <= 97) {
                    $sumas['D6M'] += intval($data[$i][$j]);
                    $contadores['D6M']++;
                }
            }
            if ($j == 6) {
                if ($i >= 0 && $i <= 11) {
                    $sumas6['D16'] += intval($data[$i][$j]);
                    $contadores6['D16']++;
                } elseif ($i >= 12 && $i <= 16) {
                    $sumas6['D16M'] += intval($data[$i][$j]);
                    $contadores6['D16M']++;
                } elseif ($i >= 17 && $i <= 27) {
                    $sumas6['D26'] += intval($data[$i][$j]);
                    $contadores6['D26']++;
                } elseif ($i >= 28 && $i <= 30) {
                    $sumas6['D26M'] += intval($data[$i][$j]);
                    $contadores6['D26M']++;
                } elseif ($i >= 31 && $i <= 42) {
                    $sumas6['D36'] += intval($data[$i][$j]);
                    $contadores6['D36']++;
                } elseif ($i >= 43 && $i <= 47) {
                    $sumas6['D36M'] += intval($data[$i][$j]);
                    $contadores6['D36M']++;
                } elseif ($i >= 48 && $i <= 58) {
                    $sumas6['D46'] += intval($data[$i][$j]);
                    $contadores6['D46']++;
                } elseif ($i >= 59 && $i <= 63) {
                    $sumas6['D46M'] += intval($data[$i][$j]);
                    $contadores6['D46M']++;
                } elseif ($i >= 64 && $i <= 74) {
                    $sumas6['D56'] += intval($data[$i][$j]);
                    $contadores6['D56']++;
                } elseif ($i >= 75 && $i <= 79) {
                    $sumas6['D56M'] += intval($data[$i][$j]);
                    $contadores6['D56M']++;
                } elseif ($i >= 80 && $i <= 91) {
                    $sumas6['D66'] += intval($data[$i][$j]);
                    $contadores6['D66']++;
                } elseif ($i >= 93 && $i <= 97) {
                    $sumas6['D66M'] += intval($data[$i][$j]);
                    $contadores6['D66M']++;
                }
            }
        }
    }

    $promediosD = array();
    $promediosDM = array();
    $promediosD6 = array();
    $promediosDM6 = array();

    foreach ($sumas as $categoria => $suma) {
        $promedio = ($contadores[$categoria] > 0) ? $suma / $contadores[$categoria] : 0;
        if (strpos($categoria, 'M') !== false) {
            // Es una categoría DM
            $promediosDM[] = round($promedio);
        } else {
            // Es una categoría D
            $promediosD[] = round($promedio);
        }
    }
    foreach ($sumas6 as $categoria6 => $sumas6) {
        $promedio6 = ($contadores6[$categoria6] > 0) ? $sumas6 / $contadores6[$categoria6] : 0;
        if (strpos($categoria6, 'M') !== false) {
            // Es una categoría DM
            $promediosDM6[] = round($promedio6);
        } else {
            // Es una categoría D
            $promediosD6[] = round($promedio6);
        }
    }
    ?>
    


</body>