<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT * FROM padres";
$result = $conn->query($sql);

$padre_madre = isset($_POST['padre_madre']) ? $_POST['padre_madre'] : '';

if ($result->num_rows > 0) {
    echo "<table id='tablaP' class='display' style='width:100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombres</th>";
    echo "<th>Apellidos</th>";
    echo "<th>Domicilio</th>";
    echo "<th>Celular</th>";
    echo "<th>Correo</th>";
    echo "<th>Ocupacion</th>";
    echo "<th>Seleccionar</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_padre"] . "</td>";
        echo "<td>" . $row["nombres"] . "</td>";
        echo "<td>" . $row["apellidos"] . "</td>";
        echo "<td>" . $row["domicilio"] . "</td>";
        echo "<td>" . $row["celular"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["ocupacion"] . "</td>";
        echo "<td><button class='btn btn-primary' onclick='seleccionar".$padre_madre."(\"" . $row["id_padre"] . "\", \"" . $row["nombres"] . "\", \"". $row["apellidos"] . "\", \"". $row["celular"] . "\")'>Seleccionar</button></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<script>";
    echo "\$('#tablaP').DataTable({";
    echo "    language: {";
    echo "    url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'";
    echo "    }";
    echo "});";
    echo "</script>";
} else {
    
}