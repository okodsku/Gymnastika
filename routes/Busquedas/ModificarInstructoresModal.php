<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT * FROM instructores WHERE id_instructor = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form action='' method='post' id='formModificarInstructores'>";
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Instructor</label><input type='text' id='idInstructorModal' name='idInstructorModal' class='form-control' value='" . $row["id_instructor"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombres</label><input required id='nombresModal' name='nombresModal' type='text' class='form-control' value='" . $row["nombres"] . "' ></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input required id='apellidosModal' name='apellidosModal' type='text' class='form-control' value='" . $row["apellidos"] . "' ></div>";
        echo "<div class='col-md-4'><label>Domicilio</label><input required id='domicilioModal' name='domicilioModal' type='text' class='form-control' value='" . $row["domicilio"] . "' ></div>";
        echo "<div class='col-md-4'><label>Celular</label><input id='celularModal' name='celularModal' type='text' maxlength='10' class='form-control' value='" . $row["celular"] . "' ></div>";
        echo "<div class='col-md-4'><label>Correo</label><input id='correoModal' name='correoModal' type='text' class='form-control' value='" . $row["correo"] . "' ></div>";
        echo "<div class='col-md-4'><label>Sueldo</label><input id='sueldoModal' name='sueldoModal' type='text' class='form-control' value='" . $row["sueldo"] . "' ></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<button class='btn btn-primary mt-2' style='margin-right: 10px; border-color:#0e3e69; background-color:#0e3e69;' onclick= 'guardarInstructores()'>Guardar</button>";
        echo "</div>";
        echo "</form>";
        
    }
} else {
    
}
$conn->close();
?>
