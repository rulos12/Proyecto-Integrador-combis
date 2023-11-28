<?php include('Head_Tabla.php');
$dataPromedioDM = array();
for ($i = 0; $i < count($promediosDM); $i++) {
    $dataPromedioDM[] = array($data[($i+1) * 14][0], $promediosDM[$i]);
}
$dataPromedioD6M = array();
for ($i = 0; $i < count($promediosDM6); $i++) {
    $dataPromedioD6M[] = array($data[($i+1) * 14][0], $promediosDM6[$i]);
}
?>
<div id="Promedio_Morning">
    <div id="container"></div>
    <table id="Data_Generales" class="table">
        <thead>
            <th>Fecha</th>
            <th>Promedio Tarde H</th>
            <th>Promedio Tarde M</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($promediosD6); $i++) :
                $k += 14;
            ?>
                <tr>
                    <td><?php echo $data[$k][0] ?></td>
                    <td><?php echo $promediosDM[$i] ?></td>
                    <td><?php echo $promediosDM6[$i] ?></td>
                </tr>
            <?php endfor ?>
        </tbody>
    </table>


    <script id="por la mañana">
        Highcharts.chart('container', {

            title: {
                text: 'Promedio de TECNM',
                align: 'left'
            },

            subtitle: {
                text: 'Llega al instituto en la mañana',
                align: 'left'
            },

            yAxis: {
                title: {
                    text: 'Numbero de personas'
                }
            },

            xAxis: {
                type: 'category',
                accessibility: {
                    rangeDescription: 'Range: 07/nov to 16/nov '
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    }
                }
            },

            series: [{
                name: 'Promedio de Hombre',
                data: [
                    <?php
                    foreach ($dataPromedioDM as $item) {
                        echo "['" . $item[0] . "', " . $item[1] . "], ";
                    }
                    ?>
                ]
            }, {
                name: 'Promedio de Mujeres',
                data: [
                    <?php
                    foreach ($dataPromedioD6M as $item) {
                        echo "['" . $item[0] . "', " . $item[1] . "], ";
                    }
                    ?>
                ]
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
</div>