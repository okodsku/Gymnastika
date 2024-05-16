<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT * FROM pagos";
$result = $conn->query($sql);
include '../../config/config.php';
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Membresia</th>
            <th>Fecha de Pago</th>
            <th>Monto de Pago</th>
            <th style='text-align: center;'>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_pago"]. "</td>";
                echo "<td>" . $row["id_membresia"]. "</td> " ; 
                echo "<td>". $row["fecha_pago"]. "</td>";
                echo "<td>" . $row["monto_pago"]. "</td>";
                echo "<td style='text-align: center;'>
                <button class='btn btn-danger mb-1' style='margin-right: 10px;' onclick='eliminar(" . $row["id_pago"] . ")'>Eliminar</button>
                <button class='btn btn-primary mb-1' style='margin-right: 10px; border-color:#0e3e69; background-color:#0e3e69;' onclick='mostrar(" . $row["id_pago"] . ")'>Ver Detalles</button>
                <a class='btn btn-primary' style='border-color:#3d5d71; background-color:#3d5d71;' target='_blank' href='".BASE_PATH."routes/Busquedas/recibo.php?id=". $row["id_pago"]."'>Generar pdf</a>
            </td>";
                echo "</tr>";
            }
        } 
        ?>
    </tbody>
</table>
<script>
    $('#example').DataTable({
        language: {
        url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
        }
    });
</script>