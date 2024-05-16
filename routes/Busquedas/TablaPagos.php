<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT * FROM pagos";
$result = $conn->query($sql);
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Membresia</th>
            <th>Fecha de Pago</th>
            <th>Monto de Pago</th>
            <th>Operaciones</th>
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
                <button class='btn btn-primary mb-1' style='margin-right: 10px;' onclick='mostrar(" . $row["id_pago"] . ")'>Ver Detalles</button>
                <button class='btn btn-secondary mb-1' onclick='recibo'>Recibo</button>
            
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