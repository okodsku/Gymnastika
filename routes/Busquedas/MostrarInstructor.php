<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT * FROM instructores WHERE id_instructor = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Alumno</label><input type='text' class='form-control' value='" . $row["id_instructor"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombres</label><input type='text' class='form-control' value='" . $row["nombres"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input type='text' class='form-control' value='" . $row["apellidos"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>CURP</label><input type='text' class='form-control' value='" . $row["domicilio"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Tipo Sangre</label><input type='text' class='form-control' value='" . $row["celular"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Alergias</label><input type='text' class='form-control' value='" . $row["correo"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Operaciones</label><input type='text' class='form-control' value='" . $row["sueldo"] . "' readonly></div>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>
