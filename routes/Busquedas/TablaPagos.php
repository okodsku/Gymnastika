<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT p.id_pago as id_pago, p.id_membresia as id_membresia, p.fecha_pago as fecha_pago, p.monto_pago as monto_pago, m.id_membresia as idMembresia, a.nombres as nombreAlumno, a.apellidos as apellidoAlumno, d.nombre as nombreDisciplina FROM membresia m INNER JOIN alumnos a ON m.id_alumno = a.id_alumno INNER JOIN disciplina d ON m.id_disciplina = d.id_disciplina INNER JOIN pagos p ON m.id_membresia= p.id_membresia";
$result = $conn->query($sql);
include '../../config/config.php';
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Membresia</th> 
            <th>Alumno</th>
            <th>Disciplina</th>
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
                echo "<td>" . $row["id_membresia"]. "</td> " ; 
                echo "<td>" . $row["nombreAlumno"]." ". $row["apellidoAlumno"]."</td>";
                echo "<td>". $row["nombreDisciplina"]. "</td>";
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