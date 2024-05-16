<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT * FROM instructores WHERE id_instructor = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Instructor</label><input type='text' class='form-control' value='" . $row["id_instructor"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombres</label><input type='text' class='form-control' value='" . $row["nombres"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input type='text' class='form-control' value='" . $row["apellidos"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Domicilio</label><input type='text' class='form-control' value='" . $row["domicilio"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Celular</label><input type='text' class='form-control' value='" . $row["celular"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Correo</label><input type='text' class='form-control' value='" . $row["correo"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Sueldo</label><input type='text' class='form-control' value='" . $row["sueldo"] . "' readonly></div>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>
