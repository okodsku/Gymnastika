<?php
include '../Conexiones/Conexion.php';

$consulta = "SELECT * FROM disciplina";
$resultado = $conn->query($consulta);
if ($resultado->num_rows > 0) {
    echo "<table id='tablaD' class='display' style='width:100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Costo</th>";
    echo "<th>Seleccionar</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_disciplina"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["costo_clase"] . "</td>";
        echo "<td><button class='btn btn-primary' onclick='seleccionarDisciplina(\"" . $row["id_disciplina"] . "\", \"" . $row["nombre"] . "\", \"" . $row["costo_clase"] . "\")'>Seleccionar</button></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<script>";
    echo "\$('#tablaD').DataTable({";
    echo "    language: {";
    echo "    url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'";
    echo "    }";
    echo "});";
    echo "</script>";
}