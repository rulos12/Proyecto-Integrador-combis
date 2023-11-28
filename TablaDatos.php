<?php include('Head_Tabla.php'); ?>
<div>
    <table id="Data_Generales" class="table">
        <thead>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Hora especifica</th>
            <th>Ruta</th>
            <th>Unidad</th>
            <th>Hombres</th>
            <th>Mujeres</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) :
            ?>
                <tr>
                    <?php
                    for ($j = 0; $j < count($data[0]); $j++) :
                    ?>
                        <td><?php echo $data[$i][$j] ?></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </tbody>
    </table>
</div>