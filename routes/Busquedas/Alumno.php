<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT * FROM alumnos";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
    echo "<table id='tablaA' class='display' style='width:100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido Paterno</th>";
    echo "<th>Seleccionar</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_alumno"] . "</td>";
        echo "<td>" . $row["nombres"] . "</td>";
        echo "<td>" . $row["apellidos"] . "</td>";
        echo "<td><button class='btn btn-primary' onclick='seleccionarAlumno(\"" . $row["id_alumno"] . "\", \"" . $row["nombres"] . "\", \"" . $row["apellidos"] . "\")'>Seleccionar</button></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<script>";
    echo "\$('#tablaA').DataTable({";
    echo "    language: {";
    echo "    url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'";
    echo "    }";
    echo "});";
    echo "</script>";
}