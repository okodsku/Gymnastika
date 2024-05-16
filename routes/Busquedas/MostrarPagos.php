<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT * FROM pagos WHERE id_pago = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Alumno</label><input type='text' class='form-control' value='" . $row["id_pago"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombres</label><input type='text' class='form-control' value='" . $row["id_membresia"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input type='text' class='form-control' value='" . $row["fecha_pago"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>CURP</label><input type='text' class='form-control' value='" . $row["monto_pago"] . "' readonly></div>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>