<?php include('Head_Tabla.php');

$dataPromedioD = array();
for ($i = 0; $i < count($promediosD); $i++) {
    $dataPromedioD[] = array($data[($i+1) * 14][0], $promediosD[$i]);
}
$dataPromedioD6 = array();
for ($i = 0; $i < count($promediosD6); $i++) {
    $dataPromedioD6[] = array($data[($i+1) * 14][0], $promediosD6[$i]);
}
?>
<div id="Promedio_Morning">
    <div id="container"></div>
    <table id="Data_Generales" class="table">
        <thead>
            <th>Fecha</th>
            <th>Promedio Dia H</th>
            <th>Promedio Dia M</th>
            <th>Promedio Tarde H</th>
            <th>Promedio Tarde M</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($promediosD); $i++) :
                $k += 14;
            ?>
                <tr>
                    <td><?php echo $data[$k][0] ?></td>
                    <td><?php echo $promediosD[$i] ?></td>
                    <td><?php echo $promediosD6[$i] ?></td>
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
                    foreach ($dataPromedioD as $item) {
                        echo "['" . $item[0] . "', " . $item[1] . "], ";
                    }
                    ?>
                ]
            }, {
                name: 'Promedio de Mujeres',
                data: [
                    <?php
                    foreach ($dataPromedioD6 as $item) {
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