<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT * FROM membresia";
$result = $conn->query($sql);
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Alumno</th>
            <th>ID Disciplina</th>
            <th>Capacidad</th>
            <th>Costo Mensual</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_membresia"]. "</td>";
                echo "<td>" . $row["id_alumno"]. "</td> " ; 
                echo "<td>". $row["id_disciplina"]. "</td>";
                echo "<td>" . $row["capacidad"]. "</td>";
                echo "<td>" . $row["costo_mensualidad"]. "</td>";
                echo "<td style='text-align: center;'>
                <button class='btn btn-danger mb-1' style='margin-right: 10px;' onclick='eliminar(" . $row["id_membresia"] . ")'>Eliminar</button>
                <button class='btn btn-primary mb-1' style='margin-right: 10px;' onclick='mostrar(" . $row["id_membresia"] . ")'>Ver Detalles</button>
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