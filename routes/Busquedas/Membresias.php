<?php
include '../Conexiones/Conexion.php';

$sql = "SELECT m.id_membresia as idMembresia, a.nombres as nombreAlumno, a.apellidos as apellidoAlumno, d.nombre as nombreDisciplina, d.costo_clase as costoDisciplina FROM membresia m INNER JOIN alumnos a ON m.id_alumno = a.id_alumno INNER JOIN disciplina d ON m.id_disciplina = d.id_disciplina";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table id='tablaM' class='display' style='width:100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID Membresia</th>";
    echo "<th>Nombre Alumno</th>";
    echo "<th>Disciplina</th>";
    echo "<th>Costo Disciplina</th>";
    echo "<th>Seleccionar</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["idMembresia"] . "</td>";
        echo "<td>" . $row["nombreAlumno"] . " ". $row["apellidoAlumno"] ."</td>";
        echo "<td>" . $row["nombreDisciplina"] . "</td>";
        echo "<td>" . $row["costoDisciplina"] . "</td>";
        echo "<td><button class='btn btn-primary' onclick='seleccionarMembresia(\"" . $row["idMembresia"] . "\", \"" . $row["nombreAlumno"] . "\", \"" . $row["nombreDisciplina"] . "\" , \"" . $row["costoDisciplina"] . "\")'>Seleccionar</button></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<script>";
    echo "\$('#tablaM').DataTable({";
    echo "    language: {";
    echo "    url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'";
    echo "    }";
    echo "});";
    echo "</script>";
}
