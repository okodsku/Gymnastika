<?php
include '../Conexiones/Conexion.php';

$fecha_ingreso = isset($_POST['fecha_ingreso']) ? $_POST['fecha_ingreso'] : '';
$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$curp = isset($_POST['curp']) ? $_POST['curp'] : '';
$tipo_sangre = isset($_POST['tipo_sangre']) ? $_POST['tipo_sangre'] : '';
$alergias = isset($_POST['alergias']) ? $_POST['alergias'] : '';
$operaciones = isset($_POST['operaciones']) ? $_POST['operaciones'] : '';

$sql = "INSERT INTO alumnos (fecha_ingreso, nombres, apellidos, curp, tipo_sangre, alergias, operaciones ,info_padre_id ,info_madre_id ,emergencia_id ,contacto_emergencia_id )
VALUES ('$fecha_ingreso', '$nombres', '$apellidos', '$curp', '$tipo_sangre', '$alergias', '$operaciones' , 10,10,10,10)";

if ($conn->query($sql) === TRUE) {
    echo "Alumno agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>