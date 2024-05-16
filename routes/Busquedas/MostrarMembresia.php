<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT * FROM membresia WHERE id_membresia = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Alumno</label><input type='text' class='form-control' value='" . $row["id_membresia"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombres</label><input type='text' class='form-control' value='" . $row["id_alumno"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input type='text' class='form-control' value='" . $row["id_disciplina"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>CURP</label><input type='text' class='form-control' value='" . $row["horario"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input type='text' class='form-control' value='" . $row["capacidad"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>CURP</label><input type='text' class='form-control' value='" . $row["costo_mensualidad"] . "' readonly></div>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>