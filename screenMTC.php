<!-- tabla y graficas medidas de tendencia central -->
<?php include('MedidasTC.php');
$i = 0;
$fechas = [];
$valoresMedia = [];
$valoresMediana = [];
$valoresModa = [];

$valoresMedia7 = [];
$valoresMediana7 = [];
$valoresModa7 = [];

foreach ($mediaColumna6 as $categoria6 => $valor6) {
    $i += 14;
    $fechas[] = $data[$i][0];
    $valoresMedia[] = $valor6;
    $valoresMediana[] = $medianaColumna6[$categoria6];
    $valoresModa[] = $modaColumna6[$categoria6];
}
$fechasJS = json_encode($fechas);
$valoresMediaJS = json_encode($valoresMedia);
$valoresMedianaJS = json_encode($valoresMediana);
$valoresModaJS = json_encode($valoresModa);

foreach ($mediaColumna7 as $categoria7 => $valor7) {
    $valoresMedia7[] = $valor7;
    $valoresMediana7[] = $medianaColumna7[$categoria7];
    $valoresModa7[] = $modaColumna7[$categoria7];
}
$valoresMediaJS7 = json_encode($valoresMedia7);
$valoresMedianaJS7 = json_encode($valoresMediana7);
$valoresModaJS7 = json_encode($valoresModa7);

?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div id="Promedio_Por Dia">
    <div id="container"></div>
    <?php $i = 0; ?>
    <table id="Data_Generales" class="table" id="Promedio">
        <thead>
            <th>Fecha</th>
            <th>Promedio Hombre por dia</th>
            <th>Mediana Mujer por dia</th>
            <th>Moda Mujer por dia</th>
        </thead>
        <tbody>
            <?php
            foreach ($mediaColumna6 as $categoria6 => $valor6) :
                $i+=14;
            ?>
                    <tr>
                        <td><?php echo $data[$i][0]; ?></td>
                        <td><?php echo $valor6; ?></td>
                        <td><?php echo $medianaColumna6[$categoria6]; ?></td>
                        <td><?php echo $modaColumna6[$categoria6]; ?></td>
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div id="container2"></div>
    <?php $i = 0; ?>
    <table id="Data_Generales" class="table" id="Mediana">
        <thead>
            <th>Fecha</th>
            <th>Mediana Hombre por dia</th>
            <th>Mediana Mujer por dia</th>
        </thead>
        <tbody>
            <?php
            foreach ($medianaColumna7 as $categoria7 => $valor7) :
                $i+=14;
                
            ?>
                    <tr>

                        <td><?php echo $data[$i][0]; ?></td>
                        <td><?php echo $valor7; ?></td>
                        <td><?php echo $medianaColumna7[$categoria7]; ?></td>
                        <td><?php echo $modaColumna7[$categoria7]; ?></td>
                    </tr>
                
            <?php endforeach; ?>
        </tbody>
    </table>
    <script id="Medidas de tendencia man">
        Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Medidas de tendencia central Hombres',
                align: 'left'
            },
            subtitle: {
                text: 'Recopilación por dia',
                align: 'left'
            },
            xAxis: {
                categories: <?php echo $fechasJS; ?>,
                title: {
                    text: null
                },
                gridLineWidth: 1,
                lineWidth: 0
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                },
                gridLineWidth: 0
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                bar: {
                    borderRadius: '50%',
                    dataLabels: {
                        enabled: true
                    },
                    groupPadding: 0.1
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Media',
                data: <?php echo $valoresMediaJS; ?>
            }, {
                name: 'Mediana',
                data: <?php echo $valoresMedianaJS; ?>
            }, {
                name: 'Moda',
                data: <?php echo $valoresModaJS; ?>
            }]
        });
    </script>
    <script id="Medidas de tendencia mujer">
        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Medidas de tendencia central Mujeres',
                align: 'left'
            },
            subtitle: {
                text: 'Recopilación por dia',
                align: 'left'
            },
            xAxis: {
                categories: <?php echo $fechasJS; ?>,
                title: {
                    text: null
                },
                gridLineWidth: 1,
                lineWidth: 0
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                },
                gridLineWidth: 0
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                bar: {
                    borderRadius: '50%',
                    dataLabels: {
                        enabled: true
                    },
                    groupPadding: 0.1
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Media',
                data: <?php echo $valoresMediaJS7; ?>
            }, {
                name: 'Mediana',
                data: <?php echo $valoresMedianaJS7; ?>
            }, {
                name: 'Moda',
                data: <?php echo $valoresModaJS7; ?>
            }]
        });
    </script>


</div>