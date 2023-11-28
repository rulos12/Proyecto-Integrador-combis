<?php
function redondearArray($arr) {
    return array_map('round', $arr);
}
function calcularMedia($data) {
    $media = array();
    foreach ($data as $categoria => $valores) {
        $media[$categoria] = array_sum($valores) / count($valores);
    }
    return redondearArray($media);
}

function calcularMediana($data) {
    $mediana = array();
    foreach ($data as $categoria => $valores) {
        sort($valores);
        $n = count($valores);
        $mid = floor(($n - 1) / 2);

        if ($n % 2 == 0) {
            $mediana[$categoria] = ($valores[$mid] + $valores[$mid + 1]) / 2;
        } else {
            $mediana[$categoria] = $valores[$mid];
        }
    }
    return redondearArray($mediana);
}

function calcularModa($data) {
    $moda = array();
    foreach ($data as $categoria => $valores) {
        $counts = array_count_values($valores);
        arsort($counts);

        $moda[$categoria] = key($counts);
    }
    return redondearArray($moda);
}

?>
