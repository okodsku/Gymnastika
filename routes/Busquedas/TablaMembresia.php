<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT m.id_membresia as idMembresia, a.nombres as nombreAlumno, a.apellidos as apellidoAlumno, d.nombre as nombreDisciplina, m.horario as horario, m.capacidad as capacidad, m.costo_mensualidad as costo_mensualidad FROM membresia m INNER JOIN alumnos a ON m.id_alumno = a.id_alumno INNER JOIN disciplina d ON m.id_disciplina = d.id_disciplina";
$result = $conn->query($sql);
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Alumno</th>
            <th>Disciplina</th>
            <th>Capacidad</th>
            <th>Costo Mensual</th>
            <th style='text-align: center;'>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idMembresia"]. "</td>";
                echo "<td>" . $row["nombreAlumno"] . " " . $row["apellidoAlumno"] . "</td> " ; 
                echo "<td>". $row["nombreDisciplina"]. "</td>";
                echo "<td>" . $row["capacidad"]. "</td>";
                echo "<td>" . $row["costo_mensualidad"]. "</td>";
                echo "<td style='text-align: center;'>
                <button class='btn btn-danger mb-1' style='margin-right: 10px;' onclick='eliminar(" . $row["idMembresia"] . ")'>Eliminar</button>
                <button class='btn btn-primary mb-1' style='margin-right: 10px; border-color:#0e3e69; background-color:#0e3e69;' onclick='mostrar(" . $row["idMembresia"] . ")'>Ver Detalles</button>
                <button class='btn btn-secondary mb-1' style='border-color:#3d5d71; background-color:#3d5d71;' onclick='modificar(" . $row["idMembresia"] . ")'>Modificar</button>
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